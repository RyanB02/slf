<?php
    if(date('dm') == '2403' or date('dm') == '2503'){
        //SATURDAY SCHEDULE CODE
        if(date('dm') == '2403'){
            if (date('dmHi') >= '24031115' and date('dmHi') < '24031230')
            {
                echo('<a style="color:red; font-family:Montserrat; text-decoration:none">Festival opening by the Mayor, Mayoress and Youth Mayor of Oldham</a>');
            }elseif(date('dmHi') >= '24031230' and date('dmHi') < '24031320'){
                echo('SPEAKER/Author - Jan Needle - interviewed by Joe Wheeler');
            }elseif(date('dmHi') >= '24031400' and date('dmHi') < '24031420'){
                echo('POETRY - Spike the Poet');                                  
            }elseif(date('dmHi') >= '24031420' and date('dmHi') < '24031440'){
                echo('POETRY - Allan Graham');                                   
            }elseif(date('dmHi') >= '24031440' and date('dmHi') < '24031600'){
                echo('POETRY - Cathy Crabb');                                   
            }elseif(date('dmHi') >= '24031600' and date('dmHi') < '24031730'){
                echo('BRADSHAWS - Buzz Hawkins');                                   
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
            if (date('dmHi') >= '25031200' and date('dmHi') < '25031245')
            {
                echo('DRAMA - Funky Fitness & Dance Syndrome');
            }elseif(date('dmHi') >= '25031245' and date('dmHi') < '25031315'){
                echo('Prize Giving - Primary Schools Poetry Competition');
            }elseif(date('dmHi') >= '25031315' and date('dmHi') < '25031400'){
                echo('POETRY - Waterhead Academy Pupils');
            }elseif(date('dmHi') >= '25031400' and date('dmHi') < '25031420'){
                echo('POETRY - Allan Graham');
            }elseif(date('dmHi') >= '25031420' and date('dmHi') < '25031440'){
                echo('POETRY - Spike the Poet');
            }elseif(date('dmHi') >= '25031440' and date('dmHi') < '25031500'){
                echo('POETRY - E M G Somerwill');
            }elseif(date('dmHi') >= '25031500' and date('dmHi') < '25031645'){
                echo('POETRY - Saddleworth School Pupils');
            }elseif(date('dmHi') >= '25031645' and date('dmHi') < '25031730'){
                echo('SPEAKER - Mike Sweeney - interviewed by Joe Wheeler');
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
