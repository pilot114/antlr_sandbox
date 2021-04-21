CREATE OR REPLACE package body TEHNO.PRICE_MODEL is
    procedure set_delim1(
        i_delim varchar2
    ) is
    begin
        gv_delim := i_delim1;
    end;

    procedure set_delim2(
        i_delim varchar2
    ) is
    begin
        gv_delim := i_delim2;
    end;
end PRICE_MODEL;
