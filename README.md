# Phundament Demo Data

## Install demo data

Enable `app-demo-data` in `app/config/console.php`


## Update demo data

Only `p3_*` tables:

     app/yiic database dump replace_p3_data --prefix=p3_ \
     --createSchema=0 --foreignKeyChecks=0 --truncateTable=1

     cp app/runtime/m123456_000000_replace_p3_data.php \
        vendor/waalzer/app-demo-data/migrations/m123456_000000_replace_p3_data.php