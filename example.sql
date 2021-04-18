/* обновить/добавить новую модель */
procedure set_model(
      i_model_name          varchar2,
      i_dt_from             date      default null,
      i_dt_to               date      default null,
      i_is_active           integer   default null,
      i_model_id    in out  integer
    )
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
            raise_application_error_fmt(i_error_code => -20110,
                                        i_message => 'Модель с ID "%s" не найдена ( или найдено больше одной )',
                                        i_args => tehno.lt_varchar2(i_model_id));
        end if;
    end if;
end;
