<?php

    if(date('dm') == '2403' or date('dm') == '2503'){
        //SATURDAY SCHEDULE CODE
        if(date('dm') == '2403'){
            if (date('dmHi') >= '24031130' and date('dmHi') < '24031230')
            {
                echo('PEAKER/Poet - Lisa Wroe');
            }elseif(date('dmHi') >= '24031230' and date('dmHi') < '24031320'){
                echo('SPEAKER/Author - Angela Blythe');
            }elseif(date('dmHi') >= '24031400' and date('dmHi') < '24031730'){
                echo('SPEAKER/Literary Agent - Christine Green');
            }elseif(date('dmHi') >= '24031730' and date('dmHi') < '25031030'){
                echo('We are done for the day, come back tomorrow where we will start at 10:30am!');
            }elseif(date('dmHi') >= '24030000' and date('dmHi') < '24031030'){
                echo('Today is the first day, check back at 10:30 when we open our doors!');
            }elseif(date('dmHi') >= '24031320' and date('dmHi') < '24031400'){
                echo('<div class="alert alert-success" style="padding:1px">It\'s lunch, guests begin again at 2pm</div>');
            }else{
                echo('<i style="color:red;">No guests are currently performing in this room!</i>');
            }
        }


        //SUNDAY SCHEDULE CODE
        if(date('dm') == '2503'){
            if (date('dmHi') >= '25031030' and date('dmHi') < '25031230')
            {
                echo('SPEAKER/Author - Barbara Hegab & Policeman Pete');
            }elseif(date('dmHi') >= '25031230' and date('dmHi') < '25031320'){
                echo('SPEAKER/Author - Geoff Higginbottom');
            }elseif(date('dmHi') >= '25031400' and date('dmHi') < '25031500'){
                echo('SPEAKER/Author - Phaedra Patrick');
            }elseif(date('dmHi') >= '25031500' and date('dmHi') < '25031730'){
                echo('SPEAKER/Literary Agent - Christine Green');
            }elseif(date('dmHi') >= '25031730' and date('dmHi') < '11120000'){
                echo('We are done! Thank you for your support!');
            }elseif(date('dmHi') >= '25030000' and date('dmHi') < '25031030'){
                echo('Today is the second day, check back at 10:30 when we open our doors!');
            }elseif(date('dmHi') >= '25031320' and date('dmHi') < '25031400'){
                echo('<div class="alert alert-success" style="padding:1px">It\'s lunch, guests begin again at 2pm</div>');
            }else{
                echo('<i style="color:red;">No guests are currently performing in this room!</i>');
            }
        }
    }elseif(date('dm') > '2503'){
        echo('We hope you enjoyed our festival!');
    }else{
        echo('Check back on the 24th/25th of March to see this section in action!');
    }

    

?>
