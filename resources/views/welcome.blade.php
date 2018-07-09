
@extends('layouts.app_main')
<?php
use App\Author;
use App\Sponsor;
$month = Config::get('app.month');;
?>
<?php
    $date = strtotime("March 24, 2018 12:00 AM");

    $remaining = $date - time();
    $days_remaining = floor($remaining / 86400  + 1);
    $hours_remaining = floor(($remaining % 86400) / 3600 + 1);
?>
@section('pageTitle')
    Home
@endsection
@section('scroll')
  @include('welcome_partials.scroll')
@endsection
@section('meta')
    
@endsection

@section('content_desktop_render')
@if(Session::has('sent'))
<script type="text/javascript">
    swal({
          title: "Success!",
          text: "{{session::get('sent')}}",
          icon: "success",
          closeOnClickOutside: true,
          closeOnEsc: true,
          button:"Okay",
        });
</script>
@endif

        <div class="container-flex" style="margin-top: -15px">
            <div class="row" style="margin:0px; padding: 0px; @if(Auth::user()) @if(Auth::user()->admin == 1) margin-top:100px !important; @else margin-top:200px; @endif @endif margin-top:200px; left: 30px">
                <div class="col-12" ">
                    <h1 class="animated fadeIn" style="text-align: center; font-family: cdreams; font-size: 55px; font-weight: # !important">Saddleworth Literary Festival <sup>{{config('app.next_festival_year')}}</sup></h1>
                </div>
            </div>
        </div>
    <div class="container d-none d-xl-block animated fadeIn" style="margin-top:30px;">
        
        <div class="row col-12">

            <a  href="{{route('about')}}" style="cursor: pointer; text-decoration: none; margin:0px" id="about_circ"> 

                <div class="col-lg-2  ml-5 " style="padding-right: 0px">
                    <div class="card card-default text-dark hero" style="border-radius:0px !important; height:160px !important; width:160px !important; color:#5B6265;   ">
                        <center>
                            <br>
                            <i class="fa fa-info fa-5x unskew_fix_rep" aria-hidden="true"></i>
                            <h4 class="unskew_fix_rep">About Us
                            </h4> 
                        </center>
                    </div>
                </div>
            </a>
            <a href="{{route('upcoming')}}" style="cursor: pointer; text-decoration: none" id="about_circ"> 
                <div class="col-lg-2  " style="padding-left:0px  !important; margin-left: 5px;  ">
                    <div class="card card-default  text-dark hero" style="border-radius:0px !important; height:160px !important; width:160px !important; color:#5B6265; border-">
                        <div class="card-body">
                            <center>
                                <i class="fa fa-calendar fa-5x unskew_fix_rep" aria-hidden="true" style="padding-top: 8%"></i>
                                <h4 class="unskew_fix_rep">Upcoming Events</h4>
                            </center>
                        </div>
                    </div>
                </div>
            </a>
            <a  href="{{route('guests')}}" style="cursor: pointer; text-decoration: none" id="about_circ"> 
                <div class="col-lg-2 " style="padding-left:0px  !important; margin-left: -10px;">
                    <div class="card card-default text-dark hero" style="border-radius:0px !important; height:160px !important; width:160px !important; color:#5B6265">
                        <div class="card-body">
                            <center>
                                <i class="fa fa-address-book fa-5x unskew_fix_rep" aria-hidden="true" style="padding-top: 10%"></i>
                                <h4 class="unskew_fix_rep"> Guests {{config('app.next_festival_year')}}</h4>
                            </center>
                        </div>
                    </div>
                </div>
            </a>

            <a  href="{{route('featuring')}}" style="cursor: pointer; text-decoration: none" id="about_circ"> 
                <div class="col-lg-2 " style="padding-left:0px  !important; margin-left: -10px;">
                    <div class="card card-default  text-dark hero" style="border-radius:0px !important; height:160px !important; width:160px !important; color:#5B6265">
                        <div class="card-body">
                            <center>
                                <i class="fa fa-star fa-5x unskew_fix_rep" aria-hidden="true" style="padding-top: 10%"></i>
                                <h4 class="unskew_fix_rep">Featuring</h4>
                            </center>
                        </div>
                    </div>
                </div>
            </a>
            <a  href="#" style="cursor: not-allowed; text-decoration: none; opacity: 0.5 " id="about_circ"> 
                <div class="col-lg-2 " style="padding-left:0px  !important; margin-left: -10px; ">
                    <div class="card card-default text-dark hero" style="border-radius:0px !important; height:160px !important; width:160px !important; color:#5B6265">
                        <div class="card-body">
                            <center>
                                <i class="fa fa-picture-o fa-5x unskew_fix_rep" aria-hidden="true" style="padding-top: 3%"></i>
                                <h4 class="unskew_fix_rep">Gallery</h4>
                            </center>
                        </div>
                    </div>
                </div>
            <a  href="#" style="cursor: not-allowed; text-decoration: none; opacity: 0.5 " id="about_circ"> 
                <div class="col-lg-2 " style="padding-left:0px  !important; margin-left: -10px; ">
                    <div class="card card-default text-dark hero" style="border-radius:0px !important; height:160px !important; width:160px !important; color:#5B6265">
                        <div class="card-body">
                            <center>
                                <i class="fa fa-clock-o fa-5x unskew_fix_rep" aria-hidden="true" style="padding-top: 3%"></i>
                                <h4 class="unskew_fix_rep">Schedule {{config('app.next_festival_year')}}</h4>
                            </center>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <div class="container d-none d-lg-block  d-xl-none animated fadeIn" style="margin-top:30px; marg">
        
        <div class="row col-12">

            <a  href="{{route('about')}}" style="cursor: pointer; text-decoration: none; margin:0px" id="about_circ"> 
                <div class="col-lg-2 ml-1 " style="padding-right: 0px">
                    <div class="card card-default text-dark hero" style="border-radius:0px !important; height:160px !important; width:145px !important; color:#5B6265;   ">
                        <center>
                            <br>
                            <i class="fa fa-info fa-5x unskew_fix_rep" aria-hidden="true"></i>
                            <h4 class="unskew_fix_rep">About Us
                            </h4> 
                        </center>
                    </div>
                </div>
            </a>
            <a href="{{route('upcoming')}}" style="cursor: pointer; text-decoration: none; margin:0px" id="about_circ"> 
                <div class="col-lg-2  " style="padding-left:0px  !important; margin-left:-1px;  ">
                    <div class="card card-default  text-dark hero" style="border-radius:0px !important; height:160px !important; width:145px !important; color:#5B6265; border-">
                        <div class="card-body">
                            <center>
                                <i class="fa fa-calendar fa-5x unskew_fix_rep" aria-hidden="true" style="padding-top: 8%"></i>
                                <h4 class="unskew_fix_rep">Upcoming Events</h4>
                            </center>
                        </div>
                    </div>
                </div>
            </a>
            <a  href="{{route('guests')}}" style="cursor: pointer; text-decoration: none; margin:0px" id="about_circ"> 
                <div class="col-lg-2 " style="padding-left:0px  !important; margin-left: -16px;">
                    <div class="card card-default text-dark hero" style="border-radius:0px !important; height:160px !important; width:145px !important; color:#5B6265">
                        <div class="card-body">
                            <center>
                                <i class="fa fa-address-book fa-5x unskew_fix_rep" aria-hidden="true" style="padding-top: 10%"></i>
                                <h4 class="unskew_fix_rep"> Guests {{config('app.next_festival_year')}}</h4>
                            </center>
                        </div>
                    </div>
                </div>
            </a>

            <a  href="{{route('featuring')}}" style="cursor: pointer; text-decoration: none; margin:0px" id="about_circ"> 
                <div class="col-lg-2 " style="padding-left:0px  !important; margin-left: -16px;">
                    <div class="card card-default  text-dark hero" style="border-radius:0px !important; height:160px !important; width:145px !important; color:#5B6265">
                        <div class="card-body">
                            <center>
                                <i class="fa fa-star fa-5x unskew_fix_rep" aria-hidden="true" style="padding-top: 10%"></i>
                                <h4 class="unskew_fix_rep">Featuring</h4>
                            </center>
                        </div>
                    </div>
                </div>
            </a>
            <a  href="#" style="cursor: not-allowed; text-decoration: none; opacity: 0.5; margin:0px" id=""> 
                <div class="col-lg-2 " style="padding-left:0px  !important; margin-left: -16px; ">
                    <div class="card card-default text-dark hero" style="border-radius:0px !important; height:160px !important; width:145px !important; color:#5B6265">
                        <div class="card-body">
                            <center>
                                <i class="fa fa-picture-o fa-5x unskew_fix_rep" aria-hidden="true" style="padding-top: 3%"></i>
                                <h4 class="unskew_fix_rep">Gallery</h4>
                            </center>
                        </div>
                    </div>
                </div>
            </a>
            <a  href="#" style="cursor: not-allowed; text-decoration: none; opacity: 0.5 ; margin:0px" id="about_circ"> 
                <div class="col-lg-2 " style="padding-left:0px  !important; margin-left: -16px;">
                    <div class="card card-default text-dark hero" style="border-radius:0px !important; height:160px !important; width:145px !important; color:#5B6265">
                        <div class="card-body">
                            <center>
                                <i class="fa fa-clock-o fa-5x unskew_fix_rep" aria-hidden="true" style="padding-top: 3%"></i>
                                <h4 class="unskew_fix_rep">Schedule {{config('app.next_festival_year')}}</h4>
                            </center>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
    @if(Auth::user() and @Auth::user()->admin ==1)
    <div class="d-none d-xl-block">
        <div class="container animated fadeIn mt-2">
            <div class="row ml-3">
                <div class="col-4 ml-5" style="margin-right: -63px !important; z-index:1 ">
                    <div class="col-lg-4 " style="padding-left:0px  !important; ">
                        <div class="card card-default text-dark" style="border-radius:0px !important; height:160px !important; width:320PX !important; color:#5B6265; background-color: transparent; border-top-left-radius: 5px !important; border-bottom-left-radius: 5px !important; border: 1px solid; border-right: 0px solid; border-color: #F4D2D6">
                            <div class="card-body">
                                <center><u>Notes</u></center>
                                @foreach(App\frontpageoption::where('element_name', 'front_page_notes')->get() as $note){{$note->data}}@endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4 " style="margin-right: 0px !important; padding-right: 0px!important; right:0px;overflow: hidden; width:320px ">
                    <div class="col-lg-4 " style="padding-left:0px;">
                         <a  href="{{route('admin')}}" style="text-decoration: none; margin-right: 0px !important; padding: 0px !important;" id="about_circ"> 
                            <div class="card card-default text-dark " style="border-radius:0px !important; height:160px !important; width:320PX !important; color:#5B6265; background-color: #F4D2D6; margin-right: 0px !important; z-index: 2">
                                <div class="card-body">
                                    <center>
                                        <i class="fa fa-tachometer fa-5x unskew_fix_rep" aria-hidden="true" style="padding-top: 3%"></i>
                                        <h4 class="unskew_fix_rep">Admin Dashboard</h4>
                                    </center>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-4" style="margin-left: -63px !important; z-index:1 ">
                    <div class="col-lg-4 " style="padding-left:0px  !important; ">
                        <div class="card card-default text-dark" style="border-radius:0px !important; height:160px !important; width:320PX !important; color:#5B6265; background-color: transparent; border-top-right-radius: 5px !important; border-bottom-right-radius: 5px !important; border: 1px solid; border-left: 0px solid; border-color: #F4D2D6">
                            <div class="card-body">
                                Logged in as: {{Auth::user()->name}}<br>
                                Acount created: {{Auth::user()->created_at}}<br>
                                Admin Status: {{Auth::user()->admin}}<br>
                                Logged in at: {{Auth::user()->session_start}}<br>
                               <a onclick="event.preventDefault(); document.getElementById('logout-form').submit();" href="{{ route('logout') }}" style="cursor: pointer">
                                    <span   class="badge badge-primary pull-right" style="margin-top: 10px; padding:7px">Log Out</span>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="d-none d-lg-block d-xl-none">
        <div class="container animated fadeIn mt-2">
            <div class="row">
                <div class="col-4" style="margin-right: -15px !important; z-index:1 ">
                    <div class="col-lg-4 " style="padding-left:0px  !important; ">
                        <div class="card card-default text-dark" style="border-radius:0px !important; height:160px !important; width:320PX !important; color:#5B6265; background-color: transparent; border-top-left-radius: 5px !important; border-bottom-left-radius: 5px !important; border: 1px solid; border-right: 0px solid; border-color: #F4D2D6">
                            <div class="card-body">
                                <center><u>Notes</u></center>
                                @foreach(App\frontpageoption::where('element_name', 'front_page_notes')->get() as $note){{$note->data}}@endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4" style="margin-right: 0px !important; padding-right: 0px!important; right:0px;overflow: hidden; width:320px ">
                    <div class="col-lg-4 " style="padding-left:0px;">
                         <a  href="{{route('admin')}}" style="text-decoration: none; margin-right: 0px !important; padding: 0px !important;" id="about_circ"> 
                            <div class="card card-default text-dark " style="border-radius:0px !important; height:160px !important; width:320PX !important; color:#5B6265; background-color: #F4D2D6; margin: 0px !important; z-index: 2">
                                <div class="card-body">
                                    <center>
                                        <i class="fa fa-tachometer fa-5x unskew_fix_rep" aria-hidden="true" style="padding-top: 3%"></i>
                                        <h4 class="unskew_fix_rep">Admin Dashboard</h4>
                                    </center>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-4" style="margin-left: -15px !important; z-index:1 ">
                    <div class="col-lg-4 " style="padding-left:0px  !important; ">
                        <div class="card card-default text-dark" style="border-radius:0px !important; height:160px !important; width:320PX !important; color:#5B6265; background-color: transparent; border-top-right-radius: 5px !important; border-bottom-right-radius: 5px !important; border: 1px solid; border-left: 0px solid; border-color: #F4D2D6">
                            <div class="card-body">
                                Logged in as: {{Auth::user()->name}}<br>
                                Acount created: {{Auth::user()->created_at}}<br>
                                Admin Status: {{Auth::user()->admin}}<br>
                                Logged in at: {{Auth::user()->session_start}}<br>
                               <a onclick="event.preventDefault(); document.getElementById('logout-form').submit();" href="{{ route('logout') }}" style="cursor: pointer">
                                    <span   class="badge badge-primary pull-right" style="margin-top: 10px; padding:7px">Log Out</span>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endif
    <div class="container mt-4 animated fadeIn">

        <div class="row">
            <div class="col-6">
                <div class="card card-default  text-dark">
                    <div class="card-header" style="text-align: center">Welcome</div>
                    <div class="card-body" style="text-align: center;">
                            Welcome to The Saddleworth Literary Festival's Official Site<br>
                            Click on one of the cards above to learn about us!
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card card-default  text-dark">
                    <div class="card-header" style="text-align: center">Random Fact</div>
                    <div class="card-body" style="text-align: center;">
                        <div class="quoteContainer">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br>
        <center style="border:1px solid; border-top-right-radius: 10px;border-bottom-left-radius: 10px; width:50%; margin-left: 25%; border-color: grey">
            <p style="font-family: Montserrat; color:grey; padding-bottom: 0px; margin-bottom: 0px; font-size: 20px; text-decoration: underline ">Contact Us:</p>
            <a href="https://en-gb.facebook.com/SaddleworthLiteraryFestival/" target="_blank" class="social" style="text-decoration: none">
                <i class="fa fa-facebook-square fa-3x social" style="color:#31353A" aria-hidden="true"></i> 
            </a>
            <a href="https://www.instagram.com/saddleworthlitfest/" target="_blank" class="social" style="text-decoration: none">
                <i class="fa fa-instagram fa-3x social" style="color:#31353A" aria-hidden="true" ></i>
            </a>
            <a href="#" data-toggle="modal" data-target="#contact-modal-desktop"  class="social"><i class="fa fa-envelope fa-3x social" style="color:#31353A" ></i></a>
            <a href="https://twitter.com/SaddleworthLit?lang=en"  class="social" style="text-decoration: none;" target="_blank">
                <i class="fa fa-twitter fa-3x social" style="color:#31353A" aria-hidden="true"></i>
            </a>
        </center>


    </div>
        <script>
            $(document).ready(function(){
                    var quoteSource=[
                    {
                        quote: "Woah, this is a rare one!",
                        name:"It appears that by luck you have just been given the rarest possible fun fact that we put on our website! Celebrations are in order, did you know that the oldest known to exist champagne bottle was found in mint condition and was made in 1893, it is now on display at the Veuve Clicquot Ponsardin visitor centre in Reims and is regarded as priceless!"
                    },
                    {
                        quote:"Longest book in the world:",
                        name:"‘A la recherche du temps perdu’ by Marcel Proust is the longest book in the world at 9,609,000 characters. Translated into Remembers of Things Past, the book tells the story of the narrator’s experiences growing up."
                    },
                    {
                        quote:"Roald Dahl’s interesting life experiences:",
                        name:"Dahl served in the Royal Air Force during World War II and also tested chocolates for Cadbury’s while he was at school. (I guess we know where his inspiration for Charlie and the Chocolate Factory came from)."
                    },
                    {
                        quote:"Victor Hugo’s 823 word long sentence:",
                        name:"In Victor Hugo’s novel, Les Miserables, you can find a sentence that is 823 words long. However, there may be other sentences that surpasses this length. But this one is worth knowing."
                    },
                    {
                        quote:"J.K. Rowling is not actually her name:",
                        name:"Our favorite author who goes by initials, actually doesn’t have a middle name. After a suggestion from her publisher, she chose her grandmother’s name, Kathleen."
                    },
                    {
                        quote:"Charles Dickens’ superstitious behaviour:",
                        name:"Dickens believed that sleeping facing North, would improve his writing. He also carried a compass when travelling to make sure he was facing the right direction and he always touched things 3 times for luck."
                    },
                    {
                        quote:"Tolstoy owes War and Peace to his wife’s efforts:",
                        name:"The 1400 page novel was copied around 7 times by Leo Tolstoy’s wife, Sophia, by hand – that’s love."
                    },
                    {
                        quote:"The words F. Scott Fitzgerald created that you use everyday:",
                        name:"Oxford English Dictionary notes the earliest use of the word ‘wicked’ to mean good/cool to be from Fitzgerald’s novel ‘This Side of Paradise’. He is also thought to have used the word T-shirt for the first time."
                    },
                    {
                        quote:"The children’s story that China banned:",
                        name:"The Governor of Hunan Province in China banned Lewis Carroll’s Alice in Wonderland because he believed that animals should not be given the power to use the language of humans and to put animals and humans on the same level would be ‘disastrous’."
                    },
                    {
                        quote:"Charles Dickens believed in the supernatural, and he belonged to something called The Ghost Club.",
                        name:"He was also a big fan of hypnotism"
                    },
                    {
                        quote:"John Steinbeck's original manuscript for Of Mice and Men was eaten by a dog.",
                        name:"Steinbeck's puppy, Toby, was left alone one evening and effectively ate some really important homework. Steinbeck wrote of the incident to his agent and said, 'I was pretty mad, but the poor little fellow may have been acting critically.'"
                    },
                    {
                        quote:"007 and Sting",
                        name:"Sting wrote the song ‘Every Breath You Take’ at the same desk which Ian Fleming used to write his James Bond novels. It may have helped that the desk was situated in the ‘Fleming Villa’ at GoldenEye on the island of Jamaica"
                    },
                    {
                        quote:"Bilbo's birthday",
                        name:"Bilbo Baggins was born on September 22nd 1290."
                    },
                    {
                        quote:"Need a breath?",
                        name:"The longest sentence (piece of work without a full stop) ever printed in a novel? It is a horrifyingly breath stealing 823 words long and is to be found in Victor Hugo’s Les Miserables."
                    },
                    {
                        quote:"Top 3 most read books in the world are?",
                        name:"The Holy Bible, Quotations from Chairman Mao Tse-Tung and Harry Potter."
                    },
                    {
                        quote:"Cinderella’s slippers were originally made out of fur!",
                        name:"The story was changed in the 1600s by a translator. It was the left shoe that Aschenputtel (Cinderella) lost at the stairway, when the prince tried to follow her."
                    },
                    {
                        quote:"Dr. Seuss wrote “Green Eggs and Ham” after his editor dared him to write a book using fewer than 50 different words!.",
                        name:"The vocabulary of the text consists of just 50 different words, and was the result of a bet between Seuss and Bennett Cerf (Dr. Seuss’s publisher) that Seuss (after completing The Cat in the Hat using 236 words) could not complete an entire book without exceeding that limit."
                    },
                    {
                        quote:"Charles Dickens’s house had a secret door in the form of a fake bookcase!",
                        name:"The fake books included titles such as ‘The Life of a Cat’ in 9 volumes. I would not suspect a thing!"
                    },
                    {
                        quote:"The Oxford English Dictionary credits Charles Dickens with the first use of butter-fingers, crossfire, dustbin, fairy story, slow-coach, and whoosh.",
                        name:"He also gets the credit for ‘boredom’ in the Oxford English Dictionary, coined in his novel Bleak House (1852-3), but this has since been traced back even earlier, to 1830."
                    },
                    {
                        quote:"Sherlock Holmes never said",
                        name:"“Elementary, my dear Watson”!"
                    },
                    {
                        quote:"“I am.”",
                        name:"is the shortest complete sentence in the English language!"
                    },
                    {
                        quote:"A Language dies every:",
                        name:"14 days!"
                    },
                    {
                        quote:"Most expensive book ever purchased:",
                        name:"Everyone’s favorite billionaire Bill Gates bought ‘Codex Leicester’, one of Leonardo Di Vinci’s scientific journals for $30.8 million."
                    }

                ];
                    
                        //define the containers of the info we target
                        var quote = $('#quoteContainer p').text();
                        var quoteGenius = $('#quoteGenius').text();
                        //getting a new random number to attach to a quote and setting a limit
                        var sourceLength = quoteSource.length;
                        var randomNumber= Math.floor(Math.random()*sourceLength);
                        //set a new quote
                        for(i=0;i<=sourceLength;i+=1){
                        var newQuoteText = quoteSource[randomNumber].quote;
                        var newQuoteGenius = quoteSource[randomNumber].name;
                        console.log(newQuoteText,newQuoteGenius);
                      var quoteContainer = $('.quoteContainer');
                      //fade out animation with callback
                        quoteContainer.append("<b>"+newQuoteText+"</b>" + "<br>" +  newQuoteGenius); 
                        
                        break;
                    };//end for loop
            });//end document ready

        </script>
@endsection
@section('content_mobile_render')

<html>
    <div class="container-flex">
        <div class="container">
            <div class="page-header" style="margin-top: 15px; color: rgba(0,0,0,0.7) !important;border-color: rgba(0,0,0,0.6) !important ">
                <h1 style="font-family: Montserrat; text-align: center">SLF {{config('app.next_festival_year')}}</h1>
            </div>
            <div class="card card-default mt-2">
                <div class="card-body" style="text-align: center; font-family: montserrat; ">
                        <div class="page-header" style="color:black !important; border-color:grey">
                            Welcome
                        </div><br>
                        Preperations are under way for the 3<sup>rd</sup> literary festival! We hope for the event to take place in April of 2019, specific dates will be released on our social media pages and website when we have made sure that the dates we choose are perfect!
                </div>

            </div>
            <div class="card card-default mt-2">
                <div class="card-body" style="text-align: center; font-family: montserrat;">
                        <div class="page-header" style="color:black !important;border-color:grey;">Random Fact</div><br>
                        <div class="quoteContainer">
                        </div>
                </div>
            </div>
            <div class="card card-default mt-2">
                <div class="card-body" style="text-align: center; font-family: montserrat;">
                        <div class="page-header" style="color:black !important;border-color:grey; ">Social</div><br>
                        <a href="https://en-gb.facebook.com/SaddleworthLiteraryFestival/" target="_blank" class="social_m" style="text-decoration: none">
                            <i class="fa fa-facebook-square fa-3x social_m" style="color:#31353A" aria-hidden="true"></i> 
                        </a>
                        <a href="https://www.instagram.com/saddleworthlitfest/" target="_blank" class="social_m" style="text-decoration: none">
                            <i class="fa fa-instagram fa-3x social_m" style="color:#31353A" aria-hidden="true" ></i>
                        </a>
                        <a href="https://twitter.com/SaddleworthLit?lang=en"  class="social_m" style="text-decoration: none;" target="_blank">
                            <i class="fa fa-twitter fa-3x social_m" style="color:#31353A" aria-hidden="true"></i>
                        </a>
                </div>
            </div>
            <div class="card card-default mt-2 mb-2" >
                <div class="card-body">
                    <center>
                        <div class="page-header" style="color:black !important; border-color:grey">
                            Sponsors (Click logos to visit website)
                        </div>
                        @if(App\Sponsor::count())
                            @foreach(App\Sponsor::orderBy('id', 'asc')->get() as $sponsor)
                                <a href="{{$sponsor->website}}" target="_blank">
                                    <img style="max-width: 100px; max-height: 70px; margin-left:5px " class="social" src="{{asset('uploads/sponsors/'.$sponsor->image)}}"> 
                                </a>
                            @endforeach
                        @else
                            <p style="color:grey; text-align: center">No sponsors have been added for {{Config('app.next_festival_year')}} </p>
                        @endif
                        </div>
                       
                    </center>

                </div>
            </div>
        </div>
       
    </div>
</html>


@endsection
