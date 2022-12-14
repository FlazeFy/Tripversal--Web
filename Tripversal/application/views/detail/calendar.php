<style>
    .table-calendar table tbody tr td a{
        color:#D62C49 !important;
        font-weight:bold !important;
        cursor: text !important;
    }
    .table-calendar table tbody tr td{
        padding:10px !important;
    }
</style>

<h5><i class="fa-regular fa-calendar"></i> Available Dates</h5>
<hr>
<div class="table-calendar">
    <?php 
        $prefs = array(
            'start_day' => 'monday',
            'month_type' => 'long',
            'day_type' => 'short'
        );

        $data = [];
        //Get day in this month
        foreach ($ongoingData as $og) {
            $day = $og['day'];
            $data += [ "$day" => " " ];
        }
        
        $this->load->library('calendar', $prefs);
        
        echo $this->calendar->generate(date("Y"), date("m"),$data);
    ?>
</div>