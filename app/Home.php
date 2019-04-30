<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Home extends Model
{
    public static function searchResults($table, $term, $link, $type, $tableName) {

        $queries = DB::table($table)
            ->where($tableName, 'LIKE', '%'.$term.'%')
            ->take(5)->get();

        foreach ($queries as $query)
        {
            $results[] = [
                'link' => $link.$query->id,
                'id' => $query->id,
                'value' => $type.' '.$query->$tableName
            ];
        }

        return isset($results) ? $results : [];
    }

}
