<?php
/***
 * This class display porgress bars 
 */
namespace Model;

class Progress
{	    
   public function create($page, $precent1, $precent2, $numbers)
   {
       // widget progress bar
       if(!$page) {
        // model 1 
        $widget = '
        <div class="card" id="widget-load">
            <div class="progresses">
                <div class="barOverflow">
                    <div class="warning-bar bar"></div>
                </div>
                <span>'.$precent1.'</span>%
            </div>
            <p class="progress-p text-center font-12 m-0">Mandature</p>
            <div class="divider_second mb-2 mt-2"></div>
            <div class="progresses">
                <div class="barOverflow">
                    <div class="success-bar bar"></div>
                </div>
                <span>'.$precent2.'</span>%
            </div>
            <p class="progress-p font-12 text-center">Respect des Engagements</p>
        </div>';
       } 
       // model 2
       else {
        $widget = '
        <div class="card pt-4 pb-4">
            <div class="progresses progresses-2 mb-2">
                <div class="barOverflow barOverflow-2">
                    <div class="success-bar bar bar-second"></div>
                </div>
                <span>'.$precent1.'</span>%
            </div>
            <p class="progress-p text-center font-13 m-0 danger font-weight-bold">'.$page.'</p>
            <p class="progress-p text-center font-12 m-0">Respect des engagements</p>
        </div>';
       }

       // widget bottom
        $widget.= '
        <div class="card p-3 mt-5 sidebar-responsive-bottom">
            <div class="card_numbers font-15 d-flex">
                <div class="nb nb-success font-25 mr-2">'.$numbers[0].'</div> 
                <div class="mt-2">Engagements respectés</div>
            </div>
            <div class="divider_second mb-2 mt-2"></div>
            <div class="card_numbers font-15 d-flex">
                <div class="nb nb-warning font-25 mr-2">'.$numbers[1].'</div> 
                <div class="mt-2">Engagements en cours</div>
            </div>
            <div class="divider_second mb-2 mt-2"></div>
            <div class="card_numbers font-15 d-flex">
                <div class="nb nb-danger font-25 mr-2">'.$numbers[2].'</div> 
                <div class="mt-2">Engagements à respecter</div>
            </div>
        </div>';

       return $widget;
   }
   // load on accordeon 
   public function load($percent)
   {
        $widget = '
            <div class="progress-load progresses progresses-3 mb-2">
                <div class="barOverflow barOverflow-3">
                    <div class="success-bar bar bar-third"></div>
                </div>
                <span>'.$percent.'</span>%
            </div>';
        return $widget;
   }

   // load on accordeon 
   public function cards($percent)
   {
        $widget = '
            <div class="progress-load progresses progresses-4 mb-2 mt-2">
                <div class="barOverflow barOverflow-4">
                    <div class="warning-bar bar bar-fourth"></div>
                </div>
                <span>'.$percent.'</span>%
            </div>';
        return $widget;
   }
}