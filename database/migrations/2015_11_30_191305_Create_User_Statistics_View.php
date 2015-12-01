<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Connection;

class CreateUserStatisticsView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        DB::statement("create view user_event_statistics
as
with base as (
select g.session_id
, g.user_id
, case when e.event_name like '%Session%' then 'Session' else e.event_name end as event_name
, a.name
, cast(a.value as decimal(18,2)) as value

from games g
join events e on g.id = e.game_id
join event_attributes a on e.id = a.event_id
)

, agg_event as (
select session_id, user_id, event_name, name, max(value) as value
, row_number() over (partition by session_id, user_id, event_name order by max(value)) as collision_order
from base
group by session_id, user_id, event_name, name
)
, duration_event as (
select a.session_id, a.user_id, a.event_name, a.value
, b.value - a.value as duration
from agg_event a
join agg_event b on a.session_id = b.session_id
	and a.user_id = b.user_id
	and a.event_name = b.event_name
	and a.collision_order = b.collision_order - 1
	)

select ROW_NUMBER() OVER(order by user_id, event_name) as id
, user_id, event_name
, count(*)
, cast(avg(duration) as decimal(18,2)) as avg_duration
, cast(min(duration) as decimal(18,2)) as min_duration
, cast(max(duration) as decimal(18,2)) as max_duration

from duration_event
group by user_id, event_name;
        ");

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        DB::statement("DROP view user_event_statistics;");

    }
}
