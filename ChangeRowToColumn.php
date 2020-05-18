<?php

class Task_Update_Once_AddTags extends Task_Import_Main {

    protected $csv_name = 'vcbacked';

    public function _execute(array $params) {

        $this->handle_file();

        $headers = array(
            'id'
        );

        while ($row = $this->get_handled_data()) {

            if (!$row || count($row) !== count($headers)) {

                Minion_CLI::write('Seems all');

            } else {

                $data[] = $row[0];

            }
        }

        Minion_CLI::write(implode(",", $data));

    }
}

