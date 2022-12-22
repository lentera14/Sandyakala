<?php
include_once('koneksi.php');

// Database connection info
$dbDetails = array(
    'host' => 'localhost',
    'user' => 'id20045785_syakala',
    'pass' => '%JalDHucVQir!rB7S)d(',
    'db' => 'id20045785_sandyakala'
);

// DB table to use
$table = 'jadwal_kereta';

// Table's primary key
$primaryKey = 'id_jadwal';

// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier. In this case simple
// indexes
$columns = array(
    array( 'db' => 'tanggal_waktu', 'dt' => 0 ),
    array( 'db' => 'stasiun_berangkat', 'dt' => 1 ),
    array( 'db' => 'stasiun_tujuan', 'dt' => 2 ),
    array( 'db' => 'kode_kereta', 'dt' => 3 ),
    array( 'db' => 'gerbong', 'dt' => 4 ),
    array(
        'db' => 'id_jadwal',
        'dt' => 5,
        'formatter' => function($d, $row) {
        return 
            "<td>
                <button onclick=\"getTicket('$d')\" class='btn btn-primary'>Pesan</button>
            </td>";
        }
    )
);

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * If you just want to use the basic configuration for DataTables with PHP
 * server-side, there is no need to edit below this line.
 */
require 'ssp.class.php';

echo json_encode(
    SSP::simple($_GET, $dbDetails, $table, $primaryKey, $columns)
);
?>