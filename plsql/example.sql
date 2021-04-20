CREATE OR REPLACE package body TEHNO.PRICE_MODEL is

    procedure set_delim(
        i_delim varchar2
    ) is
    begin
        gv_delim := i_delim;
    end;

--     function get_delim
--         return varchar2
--         is
--     begin
--         return gv_delim;
--     end;

    /* обновить/добавить новую модель
    */
    procedure set_model(i_model_name varchar2,
                        i_dt_from date default null,
                        i_dt_to date default null,
                        i_is_active integer default null,
                        i_model_id in out integer)
        is
    begin
        if
            i_model_id is null
        then
            insert into tehno.pm_models(dt_from, dt_to, name)
            values (coalesce(i_dt_from, trunc(sysdate, 'MM')),
                    coalesce(i_dt_to, trunc(sysdate, 'MM')), i_model_name)
            returning id into i_model_id;
        else
            update tehno.pm_models pmm
            set pmm.name      = i_model_name,
                pmm.dt_from   = i_dt_from,
                pmm.dt_to     = i_dt_to,
                pmm.is_active = i_is_active
            where pmm.id = i_model_id;
            if
                sql%rowcount != 1
            then
                raise_application_error_fmt(
                        i_error_code => -20110,
                        i_message => 'Модель с ID "%s" не найдена ( или найдено больше одной )',
                        i_args => tehno.lt_varchar2(i_model_id)
                    );
            end if;
        end if;
    end;

    procedure get_tovar_series_rel(i_model_id integer, o_res out sys_refcursor)
        is
    begin
        open o_res for
            select pmtsr.id,
                   pmtsr.model_id,
                   pmtsr.series_id,
                   pmtsr.tovar_id,
                   t.name                     tovar_name,
                   t.code                     tovar_code,
                   coalesce(tt.name, ps.name) series_name
            from tehno.pm_tovar_series_rel pmtsr
                     join tehno.tovar t on t.id = pmtsr.tovar_id
                     left join tehno.type_tovar tt on tt.id = pmtsr.series_id
                     left join test.ml_product_series ps
                               on ps.type_id = pmtsr.series_id and ps.cntr = 'ru' and ps.lang = 'ru'
            where pmtsr.model_id = i_model_id
            order by coalesce(tt.name, ps.name),
                     t.name;
    end;

end PRICE_MODEL;
