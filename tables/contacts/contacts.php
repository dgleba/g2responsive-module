<?php
class tables_contacts
{
    
    function __sql__()
    {
        return "SELECT * , ( concat_ws('_', SUBSTRING(name, 1, 4), SUBSTRING(phone, 1, 11)))  as record_name   FROM `contacts`  order by created desc";
    }
    

}
