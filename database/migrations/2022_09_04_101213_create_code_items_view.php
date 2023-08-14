<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateCodeItemsView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement($this->createView());
    }
    private function createView(): string
    {
        return <<<SQL
            CREATE VIEW view_user_data AS
            SELECT
                   sale.name,
                   sale.city,
                   sale.mobile,
                   sale.price_delivery,
                  items_orders.sale_id,
                  companys.name as companys ,
                  companys.id as company_id ,
                  sale.notes,
                  users.name as user_name,
                  sale.created_at,
                  sum(items_orders.tottal)  AS items_price ,
                  sum(items_orders.tottal) + price_delivery AS tottal ,
                  group_concat(DISTINCT items.code order by code separator ' - ') as item_code,
                  sale.store as store_name,
                  sale.mobile2
                  from sale  join
                  items_orders
                  on sale.id = items_orders.sale_id join items
                  on items.id = items_orders.item_id
                  JOIN users
                  on users.id = sale.user_id
                  JOIN companys
                  on sale.company_id = companys.id
                  group by sale.id
            SQL;
    }
    private function dropView(): string
    {
        return <<<SQL

            DROP VIEW IF EXISTS `view_user_data`;
            SQL;
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('code_items_view');
    }
}
