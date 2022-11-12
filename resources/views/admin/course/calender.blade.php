@extends('admin.master')
@section('content')
<div class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    حجوزات القاعة                    
                    <div class="mb-3">
                    <form  id="lab-dropdown" method="get" action="{{ route('admin.course.calender')}}">
                         {!! csrf_field() !!}
                             <select id="input" name="lab_id">                      
                                     @foreach($labs as $lab)
                                     <option value="{{$lab->id  }}" {{ $lab->id == $selected_id['lab_id'] ? 'selected' : '' }}>
                                        {{ $lab->lab_name }}
                                       </option>
                                       @endforeach
                             </select>
                             <input type="submit" class="btn btn-success" value="اختر المختبر">
                         </form>     
               </div>
               </div>
               </div>
            <div class="card-body">
                    <div class="alert alert-success" role="alert">

                         <div id="calendar"></div>
                    <table class="table table-bordered align-middle text-center">
                        <thead>
                            <th width="125" >أيام </th>
                                <th>السبت</th>
                                <th>الأحد</th>
                                <th>الاثنين</th>
                                <th>الثلاثاء</th>
                                <th>الأربعاء</th>
                                <th>الخميس</th>
                                <th>الجمعة</th>
                        </thead>
                         <tbody>
                            <tr>
                               <td> 
                                   8:00-9:00
                                </td>
                                <td class="align-middle text-center" style="background-color:#f0f0f0">
                              @foreach ($course as $courses)
                                @php
                                   $x =strtotime($courses->sat) ;
                                @endphp
                                  @if(date('H', $x) >= 8 && date('H', $x)< 9)
                                  {{-- <th rowspan="2"> --}}
                                       {{ $courses->activity->activity_type }} : {{  $courses->course_name }} | {{  $courses->trainer->trainer_name }}| {{  $courses->hour }}
                              {{-- </th> --}}
                                   @endif 
                                   @endforeach 
                              </td>                                  
                               
                                
                              <td class="align-middle text-center" style="background-color:#f0f0f0">
                              @foreach ($course as $courses)
                                @php
                                     $x =strtotime($courses->sun) ;
                                @endphp
                                 {{-- && ( $s > $d) --}}
                                     @if(date('H', $x) >= 8 && date('H', $x)< 9)
                                   {{ $courses->activity->activity_type }} | {{  $courses->course_name }} | {{  $courses->trainer->trainer_name }}| {{  $courses->trainer->trainer_name }}|
                                   @endif 
                                   @endforeach 
                              </td>  
                                    <td class="align-middle text-center" style="background-color:#f0f0f0">

                                    @foreach ($course as $courses)
                                @php
                                     $x =strtotime($courses->mon) ;
                                @endphp
                                     @if(date('H', $x) >= 8 && date('H', $x) < 9)
                                     {{-- <td class="align-middle text-center" style="background-color:#f0f0f0"> --}}

                                     {{ $courses->activity->activity_type }} | {{  $courses->course_name }} | {{  $courses->trainer->trainer_name }}
                                     @endif 
                                     @endforeach 
                                </td> 
                                    <td class="align-middle text-center" style="background-color:#f0f0f0">
                                    @foreach ($course as $courses)
                                @php
                                     $x =strtotime($courses->tus) ;
                                @endphp
                                     @if(date('H', $x) >= 8 && date('H', $x) < 9)

                                     {{ $courses->activity->activity_type }} | {{  $courses->course_name }} | {{  $courses->trainer->trainer_name }}
                                     @endif 
                                     @endforeach 
                                </td> 
                                   <td class="align-middle text-center" style="background-color:#f0f0f0">
                                    @foreach ($course as $courses)
                                @php
                                     $x =strtotime($courses->thr) ;
                                @endphp
                                     @if(date('H', $x) >= 8 && date('H', $x)< 9)

                                     {{ $courses->activity->activity_type }} | {{  $courses->course_name }} | {{  $courses->trainer->trainer_name }}
                                     @endif 
                                     @endforeach 
                                </td> 
                                 
                                     <td class="align-middle text-center" style="background-color:#f0f0f0">

                                        @foreach ($course as $courses)
                                    @php
                                         $x =strtotime($courses->wen) ;
                                    @endphp
                                         @if(date('H', $x) >= 8 && date('H', $x)< 9)
    
                                         {{ $courses->activity->activity_type }} | {{  $courses->course_name }} | {{  $courses->trainer->trainer_name }}
                                         @endif 
                                   @endforeach 
                              </td> 
                                    <td class="align-middle text-center" style="background-color:#f0f0f0">
                                    @foreach ($course as $courses)
                                @php
                                     $x =strtotime($courses->fri) ;
                                @endphp
                                     @if(date('H', $x) >= 8 && date('H', $x)< 9)

                                     {{ $courses->activity->activity_type }} | {{  $courses->course_name }} | {{  $courses->trainer->trainer_name }}
                                     @endif 
                                     @endforeach 
                                </td> 
                                
                               </tr>

                               <tr>
                                <td> 
                                    9:00-10:00
                                 </td>

                                 <td class="align-middle text-center" style="background-color:#f0f0f0">
                                   @foreach ($course as $courses)
                                    @php
                                        $x =strtotime($courses->sat) ;
                                    @endphp
                                         @if(date('H', $x) >= 9 && date('H', $x)<10)
                                       
                                         {{ $courses->activity->activity_type }} | {{  $courses->course_name }} | {{  $courses->trainer->trainer_name }}
                                         @endif 
                                   @endforeach 
                              </td> 
                                 
                                   <td class="align-middle text-center" style="background-color:#f0f0f0">
                                    @foreach ($course as $courses)
                                    @php
                                         $x =strtotime($courses->sun) ;
                                    @endphp
                                         @if(date('H', $x) >= 9 && date('H', $x)<10)
                                         
                                         {{ $courses->activity->activity_type }} | {{  $courses->course_name }} | {{  $courses->trainer->trainer_name }}
                                         @endif 
                                   @endforeach 
                              </td> 
                                
                                        <td class="align-middle text-center" style="background-color:#f0f0f0">
                                        @foreach ($course as $courses)
                                        @php
                                             $x =strtotime($courses->mon) ;
                                        @endphp
                                             @if(date('H', $x) >= 9 && date('H',$x)<10)
                                             
                                            

                                             {{ $courses->activity->activity_type }} | {{  $courses->course_name }} | {{  $courses->trainer->trainer_name }}
                                             @endif 
                                             @endforeach 
                                        </td> 

                                            <td class="align-middle text-center" style="background-color:#f0f0f0">
                                            @foreach ($course as $courses)
                                            @php
                                                 $x =strtotime($courses->tus) ;
                                            @endphp
                                                 @if(date('H', $x) >= 9 && date('H', $x)<10)
                                                 

                                                 {{ $courses->activity->activity_type }} | {{  $courses->course_name }} | {{  $courses->trainer->trainer_name }}
                                                 @endif 
                                                 @endforeach 
                                            </td> 
                                                <td class="align-middle text-center" style="background-color:#f0f0f0">
                                                @foreach ($course as $courses)
                                                @php
                                                     $x =strtotime($courses->thr) ;
                                                @endphp
                                                     @if(date('H', $x) >= 9 && date('H', $x)<10)
                                                     

                                                     {{ $courses->activity->activity_type }} | {{  $courses->course_name }} | {{  $courses->trainer->trainer_name }}
                                                     @endif 
                                                     @endforeach 
                                                </td> 
                                                
                                                    <td class="align-middle text-center" style="background-color:#f0f0f0">
                                                    @foreach ($course as $courses)
                                                    @php
                                                         $x =strtotime($courses->wen) ;
                                                    @endphp
                                                         @if(date('H', $x) >= 9 && date('H', $x)<10)
                                                         
                                                        

                                                         {{ $courses->activity->activity_type }} | {{  $courses->course_name }} | {{  $courses->trainer->trainer_name }}
                                                         @endif 
                                                         @endforeach 
                                                    </td> 
                                                    
                                                        <td class="align-middle text-center" style="background-color:#f0f0f0">
                                                        @foreach ($course as $courses)
                                                        @php
                                                             $x =strtotime($courses->fri) ;
                                                        @endphp
                                                             @if(date('H', $x) >= 9 && date('H', $x)<10)
                                                             

                                                             {{ $courses->activity->activity_type }} | {{  $courses->course_name }} | {{  $courses->trainer->trainer_name }}
                                                             @endif 
                                                             @endforeach 
                                                        </td> 
                                                        
                                </tr>
                                <tr>
                                    <td> 
                                        10:00-11:00
                                     </td>
                                     <td class="align-middle text-center" style="background-color:#f0f0f0">

                                        @foreach ($course as $courses)
                                        @php
                                             $x =strtotime($courses->sat) ;
                                        @endphp
                                             @if(date('H', $x) >= 10 && date('H', $x)< 11)
                                             
                                            
   
                                             {{ $courses->activity->activity_type }} | {{  $courses->course_name }} | {{  $courses->trainer->trainer_name }}
                                             @endif 
                                             @endforeach 
                                        </td> 
                                       
                                        <td class="align-middle text-center" style="background-color:#f0f0f0">
                                        @foreach ($course as $courses)
                                        @php
                                             $x =strtotime($courses->sun) ;
                                        @endphp
                                             @if(date('H', $x) >= 10 && date('H', $x)< 11)
                                             
                                           
     
                                             {{ $courses->activity->activity_type }} | {{  $courses->course_name }} | {{  $courses->trainer->trainer_name }}
                                             @endif 
                                             @endforeach 
                                        </td> 
                                            <td class="align-middle text-center" style="background-color:#f0f0f0">
                                            @foreach ($course as $courses)
                                            @php
                                                 $x =strtotime($courses->mon) ;
                                            @endphp
                                                 @if(date('H', $x) >= 10 && date('H', $x)< 11)
                                                 
                                                

                                                 {{ $courses->activity->activity_type }} | {{  $courses->course_name }} | {{  $courses->trainer->trainer_name }}
                                                 @endif 
                                                 @endforeach 
                                            </td> 
                                            
                                                <td class="align-middle text-center" style="background-color:#f0f0f0">
                                                @foreach ($course as $courses)
                                                @php
                                                     $x =strtotime($courses->tus) ;
                                                @endphp
                                                     @if(date('H', $x) >= 10 && date('H', $x)< 11)
                                                     
                                                    

                                                     {{ $courses->activity->activity_type }} | {{  $courses->course_name }} | {{  $courses->trainer->trainer_name }}
                                                     @endif 
                                                     @endforeach 
                                                </td> 
                                           
                                             <td class="align-middle text-center" style="background-color:#f0f0f0">
                                                @foreach ($course as $courses)
                                                @php
                                                     $x =strtotime($courses->thr) ;
                                                @endphp
                                                     @if(date('H', $x) >= 10 && date('H', $x)< 11)
                                                     
                                                    

                                                     {{ $courses->activity->activity_type }} | {{  $courses->course_name }} | {{  $courses->trainer->trainer_name }}
                                                     @endif 
                                                     @endforeach 
                                                </td> 
                                        
                                             <td class="align-middle text-center" style="background-color:#f0f0f0">
                                                @foreach ($course as $courses)
                                                @php
                                                     $x =strtotime($courses->wen) ;
                                                @endphp
                                                     @if(date('H', $x) >= 10 && date('H', $x)< 11)
                                                     
                                                     

                                                     {{ $courses->activity->activity_type }} | {{  $courses->course_name }} | {{  $courses->trainer->trainer_name }}
                                                     @endif 
                                                     @endforeach 
                                                </td> 
                                          
                                             <td class="align-middle text-center" style="background-color:#f0f0f0">
                                                @foreach ($course as $courses)
                                                @php
                                                     $x =strtotime($courses->fri) ;
                                                @endphp
                                                     @if(date('H', $x) >= 10 && date('H', $x)< 11)
                                                     
                                                     

                                                     {{ $courses->activity->activity_type }} | {{  $courses->course_name }} | {{  $courses->trainer->trainer_name }}
                                                     @endif 
                                                     @endforeach 
                                                </td> 
                                            
                                </tr>
                                
                                <tr>
                                    <td> 
                                        11:00-12:00
                                    </td>
                                    <td class="align-middle text-center" style="background-color:#f0f0f0">
                                        @foreach ($course as $courses)
                                        @php
                                             $x =strtotime($courses->sat) ;
                                        @endphp
                                             @if(date('H', $x) >= 11 && date('H', $x)< 12)
                                            

                                             {{ $courses->activity->activity_type }} | {{  $courses->course_name }} | {{  $courses->trainer->trainer_name }}
                                            
                                            @endif 
                                            @endforeach
                                        </td>  
                                        <td class="align-middle text-center" style="background-color:#f0f0f0">
                                        @foreach ($course as $courses)
                                        @php
                                             $x =strtotime($courses->sun) ;
                                        @endphp
                                             @if(date('H', $x) >= 11 && date('H', $x)< 12)
                                             
                                            

                                             {{ $courses->activity->activity_type }} | {{  $courses->course_name }} | {{  $courses->trainer->trainer_name }}
                                              
                                            @endif
                                          
                                            {{-- <td bgcolor="B9F8D3"></td> --}}
                                            @endforeach
                                        </td>  
                                        <td class="align-middle text-center" style="background-color:#f0f0f0">
                                            @foreach ($course as $courses)
                                            @php
                                                 $x =strtotime($courses->mon) ;
                                            @endphp
                                                 @if(date('H', $x) >= 11 && date('H', $x)< 12)
                                                 
                                                 

                                                 {{ $courses->activity->activity_type }} | {{  $courses->course_name }} | {{  $courses->trainer->trainer_name }}
                                                  
                                                @endif
                                               
                                                @endforeach
                                            </td> 
                                            <td class="align-middle text-center" style="background-color:#f0f0f0">
                                                @foreach ($course as $courses)
                                                @php
                                                     $x =strtotime($courses->tus) ;
                                                @endphp
                                                     @if(date('H', $x) >= 11 && date('H', $x)< 12)
                                                     

                                                     {{ $courses->activity->activity_type }} | {{  $courses->course_name }} | {{  $courses->trainer->trainer_name }}
                                                      
                                                    @endif
                                                    @endforeach
                                                </td> 

                                                <td class="align-middle text-center" style="background-color:#f0f0f0">

                                                    @foreach ($course as $courses)
                                                    @php
                                                         $x =strtotime($courses->thr) ;
                                                    @endphp
                                                         @if(date('H', $x) >= 11 && date('H', $x)< 12)
                                                         

                                                         {{ $courses->activity->activity_type }} | {{  $courses->course_name }} | {{  $courses->trainer->trainer_name }}
                                                          
                                                        @endif
                                                        @endforeach
                                                    </td>
                                                    <td class="align-middle text-center" style="background-color:#f0f0f0">
                                                        @foreach ($course as $courses)
                                                        @php
                                                             $x =strtotime($courses->wen) ;
                                                        @endphp
                                                             @if(date('H', $x) >= 11 && date('H', $x)< 12)
                                                             

                                                             {{ $courses->activity->activity_type }} | {{  $courses->course_name }} | {{  $courses->trainer->trainer_name }}
                                                              
                                                            @endif
                                                            {{-- <td bgcolor="B9F8D3"></td> --}}
                                                            @endforeach
                                                        </td>
                                                        <td class="align-middle text-center" style="background-color:#f0f0f0">

                                                            @foreach ($course as $courses)
                                                            @php
                                                                 $x =strtotime($courses->fri) ;
                                                            @endphp
                                                                 @if(date('H', $x) >= 11 && date('H', $x)< 12)
                                                                 

                                                                 {{ $courses->activity->activity_type }} | {{  $courses->course_name }} | {{  $courses->trainer->trainer_name }}
                                                                  
                                                                @endif
                                                                {{-- <td bgcolor="B9F8D3"></td> --}}
                                                                @endforeach
                                                            </td>
                                </tr>
                                <tr>
                                    <td> 
                                        12:00-13:00
                                    </td>
                                    <td class="align-middle text-center" style="background-color:#f0f0f0">
                                        @foreach ($course as $courses)
                                        @php
                                             $x =strtotime($courses->sat) ;
                                        @endphp
                                             @if(date('H', $x) >= 12 && date('H', $x)< 13)
                              
                                             {{ $courses->activity->activity_type }} | {{  $courses->course_name }} | {{  $courses->trainer->trainer_name }}
                                      
                                            @endif
                                            {{-- <td bgcolor="B9F8D3"></td>  --}}
                                            @endforeach
                                        </td>
                                   <td class="align-middle text-center" style="background-color:#f0f0f0">
                                        @foreach ($course as $courses)
                                        @php
                                             $x =strtotime($courses->sun) ;
                                        @endphp
                                             @if(date('H', $x) >= 12 && date('H', $x)< 13)
                                             
                                
                                             {{ $courses->activity->activity_type }} | {{  $courses->course_name }} | {{  $courses->trainer->trainer_name }}
                                           
                                            @endif
                                            {{-- <td bgcolor="B9F8D3"></td> --}}
                                            @endforeach
                                        </td>
                                        <td class="align-middle text-center" style="background-color:#f0f0f0">

                                            @foreach ($course as $courses)
                                            @php
                                                 $x =strtotime($courses->mon) ;
                                            @endphp
                                                 @if(date('H', $x) >= 12 && date('H', $x)< 13)
                                                 
                                                
                                                 {{ $courses->activity->activity_type }} | {{  $courses->course_name }} | {{  $courses->trainer->trainer_name }}
                                                  
                                                @endif 
                                                {{-- <td bgcolor="B9F8D3"></td> --}}
                                                @endforeach
                                            </td>  
                                            <td class="align-middle text-center" style="background-color:#f0f0f0">

                                            @foreach ($course as $courses)
                                            @php
                                                 $x =strtotime($courses->tus) ;
                                            @endphp
                                                 @if(date('H', $x) >= 12 && date('H', $x)< 13)
                                                 
                                                
                                                 {{ $courses->activity->activity_type }} | {{  $courses->course_name }} | {{  $courses->trainer->trainer_name }}
                                                  
                                                  @endif                              
                                                  {{-- <td bgcolor="B9F8D3"></td> --}}
                                                @endforeach
                                            </td>
                                            <td class="align-middle text-center" style="background-color:#f0f0f0">

                                                @foreach ($course as $courses)
                                                @php
                                                     $x =strtotime($courses->thr) ;
                                                @endphp
                                                     @if(date('H', $x) >= 12 && date('H', $x)< 13)
                                                     
                                                     
                                                     {{ $courses->activity->activity_type }} | {{  $courses->course_name }} | {{  $courses->trainer->trainer_name }}
                                                      
                                                    @endif 
                                                    {{-- <td bgcolor="B9F8D3"></td> --}}
                                                    @endforeach
                                            </td>
                                            <td class="align-middle text-center" style="background-color:#f0f0f0">

                                                    @foreach ($course as $courses)
                                                    @php
                                                         $x =strtotime($courses->wen) ;
                                                    @endphp
                                                         @if(date('H', $x) >= 12 && date('H', $x)< 13)
                                                         
                                                         
                                                         {{ $courses->activity->activity_type }} | {{  $courses->course_name }} | {{  $courses->trainer->trainer_name }}
                                                          
                                                        @endif 
                                                        {{-- <td bgcolor="B9F8D3"></td> --}}
                                                        @endforeach
                                                    </td>
                                                    <td class="align-middle text-center" style="background-color:#f0f0f0">

                                                        @foreach ($course as $courses)
                                                        @php
                                                             $x =strtotime($courses->fri) ;
                                                        @endphp
                                                             @if(date('H', $x) >= 12 && date('H', $x)< 13)
                                                             
                                                             
                                                             {{ $courses->activity->activity_type }} | {{  $courses->course_name }} | {{  $courses->trainer->trainer_name }}
                                                              
                                                            @endif 
                                                            {{-- <td bgcolor="B9F8D3"></td> --}}
                                                            @endforeach
                                                        </td>  

                                </tr>

                                <tr>
                                    <td> 
                                        13:00-14:00
                                    </td>
                                    <td class="align-middle text-center" style="background-color:#f0f0f0">

                                        @foreach ($course as $courses)
                                        @php
                                             $x =strtotime($courses->sat) ;
                                        @endphp
                                             @if(date('H', $x) >= 13 && date('H', $x)< 14)
                                             
                                           
                                             {{ $courses->activity->activity_type }} | {{  $courses->course_name }} | {{  $courses->trainer->trainer_name }}
                                              
                                            @endif 
                                        {{-- <td bgcolor="B9F8D3"></td> --}}
                                            @endforeach
                                        </td>
                                        <td class="align-middle text-center" style="background-color:#f0f0f0">

                                        @foreach ($course as $courses)
                                        @php
                                             $x =strtotime($courses->sun) ;
                                        @endphp
                                             @if(date('H', $x) >= 13 && date('H', $x)< 14)
                                             
                                           
                                             {{ $courses->activity->activity_type }} | {{  $courses->course_name }} | {{  $courses->trainer->trainer_name }}
                                              
                                            @endif 
                                            {{-- <td bgcolor="B9F8D3"></td> --}}
                                            @endforeach
                                        </td>
                                        <td class="align-middle text-center" style="background-color:#f0f0f0">

                                            @foreach ($course as $courses)
                                            @php
                                                 $x =strtotime($courses->mon) ;
                                            @endphp
                                                 @if(date('H', $x) >= 13 && date('H', $x)< 14)
                                                 
                                          
                                                 {{ $courses->activity->activity_type }} | {{  $courses->course_name }} | {{  $courses->trainer->trainer_name }}
                                                  
                                             @endif 
                                                {{-- <td bgcolor="B9F8D3"></td> --}}
                                                @endforeach
                                            </td>  
                                            <td class="align-middle text-center" style="background-color:#f0f0f0">

                                            @foreach ($course as $courses)
                                            @php
                                                 $x =strtotime($courses->tus) ;
                                            @endphp
                                                 @if(date('H', $x) >= 13 && date('H', $x)< 14)
                                                 
                                         
                                                 {{ $courses->activity->activity_type }} | {{  $courses->course_name }} | {{  $courses->trainer->trainer_name }}
                                                  
                                             @endif 
                                                {{-- <td bgcolor="B9F8D3"></td> --}}
                                                @endforeach
                                            </td> 
                                            <td class="align-middle text-center" style="background-color:#f0f0f0">

                                                @foreach ($course as $courses)
                                                @php
                                                     $x =strtotime($courses->thr) ;
                                                @endphp
                                                     @if(date('H', $x) >= 13 && date('H', $x)< 14)
                                                     
                                                  
                                                     {{ $courses->activity->activity_type }} | {{  $courses->course_name }} | {{  $courses->trainer->trainer_name }}
                                                      
                                                    @endif 
                                                    {{-- <td bgcolor="B9F8D3"></td> --}}
                                                    @endforeach
                                                </td>
                                                <td class="align-middle text-center" style="background-color:#f0f0f0">

                                                    @foreach ($course as $courses)
                                                    @php
                                                         $x =strtotime($courses->wen) ;
                                                    @endphp
                                                         @if(date('H', $x) >= 13 && date('H', $x)< 14)
                                                         
                                                        
                                                         {{ $courses->activity->activity_type }} | {{  $courses->course_name }} | {{  $courses->trainer->trainer_name }}
                                                          
                                                        @endif 
                                                        {{-- <td bgcolor="B9F8D3"></td> --}}
                                                        @endforeach
                                                    </td>
                                                    <td class="align-middle text-center" style="background-color:#f0f0f0">

                                                        @foreach ($course as $courses)
                                                        @php
                                                             $x =strtotime($courses->fri) ;
                                                        @endphp
                                                             @if(date('H', $x) >= 13 && date('H', $x)< 14)
                                                             
                                                            
                                                             {{ $courses->activity->activity_type }} | {{  $courses->course_name }} | {{  $courses->trainer->trainer_name }}
                                                              
                                                            @endif 
                                                            {{-- <td bgcolor="B9F8D3"></td> --}}
                                                            @endforeach
                                                        </td>
                                                      
                                </tr>

                                <tr>
                                    <td> 
                                        14:00-15:00
                                    </td>
                                    <td class="align-middle text-center" style="background-color:#f0f0f0">

                                        @foreach ($course as $courses)
                                        @php
                                             $x =strtotime($courses->sat) ;
                                        @endphp
                                             @if(date('H', $x) >= 14 && date('H', $x)< 15)
                                             
                                             
                                             {{ $courses->activity->activity_type }} | {{  $courses->course_name }} | {{  $courses->trainer->trainer_name }}
                                              
                                            @endif 
                                            @endforeach
                                        </td>  
                                        <td class="align-middle text-center" style="background-color:#f0f0f0">

                                        @foreach ($course as $courses)
                                        @php
                                             $x =strtotime($courses->sun) ;
                                        @endphp
                                             @if(date('H', $x) >= 14 && date('H', $x)< 15)
                                             
                                          
                                             {{ $courses->activity->activity_type }} | {{  $courses->course_name }} | {{  $courses->trainer->trainer_name }}
                                              
                                            @endif 
                                            @endforeach
                                        </td>  
                                        <td class="align-middle text-center" style="background-color:#f0f0f0">

                                            @foreach ($course as $courses)
                                            @php
                                                 $x =strtotime($courses->mon) ;
                                            @endphp
                                                 @if(date('H', $x) >= 14 && date('H', $x)< 15)
                                                 
                                               
                                                 {{ $courses->activity->activity_type }} | {{  $courses->course_name }} | {{  $courses->trainer->trainer_name }}
                                                  
                                                @endif 
                                                @endforeach
                                            </td>
                                            <td class="align-middle text-center" style="background-color:#f0f0f0">

                                                @foreach ($course as $courses)
                                                @php
                                                     $x =strtotime($courses->tus) ;
                                                @endphp
                                                     @if(date('H', $x) >= 14 && date('H', $x)< 15)
                                                     
                                                  
                                                     {{ $courses->activity->activity_type }} | {{  $courses->course_name }} | {{  $courses->trainer->trainer_name }}
                                                      
                                                  @endif
                                                    @endforeach
                                                </td>
                                                <td class="align-middle text-center" style="background-color:#f0f0f0">

                                                    @foreach ($course as $courses)
                                                    @php
                                                         $x =strtotime($courses->thr) ;
                                                    @endphp
                                                         @if(date('H', $x) >= 14 && date('H', $x)< 15)
                                                                                                                  
                                                         {{ $courses->activity->activity_type }} | {{  $courses->course_name }} | {{  $courses->trainer->trainer_name }}
                                                          
                                                       @endif 
                                                        @endforeach
                                                    </td>
                                                    <td class="align-middle text-center" style="background-color:#f0f0f0">

                                                        @foreach ($course as $courses)
                                                        @php
                                                             $x =strtotime($courses->wen) ;
                                                        @endphp
                                                             @if(date('H', $x) >= 14 && date('H', $x)< 15)
                                                             
                                                        
                                                             {{ $courses->activity->activity_type }} | {{  $courses->course_name }} | {{  $courses->trainer->trainer_name }}
                                                              
                                                            @endif
                                                            @endforeach
                                                        </td>
                                                        <td class="align-middle text-center" style="background-color:#f0f0f0">

                                                            @foreach ($course as $courses)
                                                            @php
                                                                 $x =strtotime($courses->fri) ;
                                                            @endphp
                                                                 @if(date('H', $x) >= 14 && date('H', $x)< 15)
                                                                 
                                                           
                                                                 {{ $courses->activity->activity_type }} | {{  $courses->course_name }} | {{  $courses->trainer->trainer_name }}
                                                                  
                                                                @endif 
                                                                @endforeach
                                                            </td>  
                                </tr>
                                <tr>
                                    <td> 
                                        15:00-16:00
                                    </td>
                                    <td class="align-middle text-center" style="background-color:#f0f0f0">

                                        @foreach ($course as $courses)
                                        @php
                                             $x =strtotime($courses->sat) ;
                                        @endphp
                                             @if(date('H', $x) >= 15 && date('H', $x)< 16)
                                             
                                            
                                             {{ $courses->activity->activity_type }} | {{  $courses->course_name }} | {{  $courses->trainer->trainer_name }}
                                              
                                            @endif 
                                            @endforeach
                                        </td> 
                                        <td class="align-middle text-center" style="background-color:#f0f0f0">

                                        @foreach ($course as $courses)
                                        @php
                                             $x =strtotime($courses->sun) ;
                                        @endphp
                                             @if(date('H', $x) >= 15 && date('H', $x)< 16)
                                             
                                             
                                             {{ $courses->activity->activity_type }} | {{  $courses->course_name }} | {{  $courses->trainer->trainer_name }}
                                              
                                        @endif 
                                            @endforeach
                                        </td> 
                                        <td class="align-middle text-center" style="background-color:#f0f0f0">

                                            @foreach ($course as $courses)
                                            @php
                                                 $x =strtotime($courses->mon) ;
                                            @endphp
                                                 @if(date('H', $x) >= 15 && date('H', $x)< 16)
                                                                                                  
                                                 {{ $courses->activity->activity_type }} | {{  $courses->course_name }} | {{  $courses->trainer->trainer_name }}
                                                  
                                                @endif 
                                               
                                                @endforeach
                                            </td> 
                                            <td class="align-middle text-center" style="background-color:#f0f0f0">

                                                @foreach ($course as $courses)
                                                @php
                                                     $x =strtotime($courses->tus) ;
                                                @endphp
                                                     @if(date('H', $x) >= 15 && date('H', $x)< 16)
                                                                                                          
                                                     {{ $courses->activity->activity_type }} | {{  $courses->course_name }} | {{  $courses->trainer->trainer_name }}
                                                      
                                                    @endif 
                                                    
                                                    @endforeach
                                                </td>
                                                <td class="align-middle text-center" style="background-color:#f0f0f0">

                                                    @foreach ($course as $courses)
                                                    @php
                                                         $x =strtotime($courses->thr) ;
                                                    @endphp
                                                         @if(date('H', $x) >= 15 && date('H', $x)< 16)
                                                         
                                                         
                                                         {{ $courses->activity->activity_type }} | {{  $courses->course_name }} | {{  $courses->trainer->trainer_name }}
                                                          
                                                        @endif 
                                                        
                                                        @endforeach
                                                    </td>
                                                    <td class="align-middle text-center" style="background-color:#f0f0f0">

                                                        @foreach ($course as $courses)
                                                        @php
                                                             $x =strtotime($courses->wen) ;
                                                        @endphp
                                                             @if(date('H', $x) >= 15 && date('H', $x)< 16)
                                                                                                                         
                                                             {{ $courses->activity->activity_type }} | {{  $courses->course_name }} | {{  $courses->trainer->trainer_name }}
                                                              
                                                            @endif 
                                                           
                                                            @endforeach
                                                        </td>
                                                        <td class="align-middle text-center" style="background-color:#f0f0f0">

                                                            @foreach ($course as $courses)
                                                            @php
                                                                 $x =strtotime($courses->fri) ;
                                                            @endphp
                                                                 @if(date('H', $x) >= 15 && date('H', $x)< 16)
                                                                                                                                  
                                                                 {{ $courses->activity->activity_type }} | {{  $courses->course_name }} | {{  $courses->trainer->trainer_name }}
                                                                @endif 
                                                               
                                                                @endforeach
                                                            </td>
                                </tr>
                                <tr>
                                    <td> 
                                        16:00-17:00
                                    </td>
                                    <td class="align-middle text-center" style="background-color:#f0f0f0">

                                        @foreach ($course as $courses)
                                        @php
                                             $x =strtotime($courses->sat) ;
                                        @endphp
                                             @if(date('H', $x) >= 16 && date('H', $x)< 17)
                                                                                         
                                             {{ $courses->activity->activity_type }} | {{  $courses->course_name }} | {{  $courses->trainer->trainer_name }}
                                              
                                            @endif 
                                          
                                            @endforeach
                                        </td>  
                                        <td class="align-middle text-center" style="background-color:#f0f0f0">

                                        @foreach ($course as $courses)
                                        @php
                                             $x =strtotime($courses->sun) ;
                                        @endphp
                                             @if(date('H', $x) >= 16 && date('H', $x)< 17)
                                                                                      
                                             {{ $courses->activity->activity_type }} | {{  $courses->course_name }} | {{  $courses->trainer->trainer_name }}
                                              
                                            @endif 
                                           
                                            @endforeach
                                        </td>  
                                        <td class="align-middle text-center" style="background-color:#f0f0f0">

                                            @foreach ($course as $courses)
                                            @php
                                                 $x =strtotime($courses->mon) ;
                                            @endphp
                                                 @if(date('H', $x) >= 16 && date('H', $x)< 17)
                                                                                                  
                                                 {{ $courses->activity->activity_type }} | {{  $courses->course_name }} | {{  $courses->trainer->trainer_name }}
                                                  
                                             @endif 
                                             
                                                @endforeach
                                            </td>
                                            <td class="align-middle text-center" style="background-color:#f0f0f0">

                                                @foreach ($course as $courses)
                                                @php
                                                     $x =strtotime($courses->tus) ;
                                                @endphp
                                                     @if(date('H', $x) >= 16 && date('H', $x)< 17)
                                                                                                   
                                                     {{ $courses->activity->activity_type }} | {{  $courses->course_name }} | {{  $courses->trainer->trainer_name }}
                                                      
                                                    @endif 
                                                   
                                                    @endforeach
                                                </td>
                                                <td class="align-middle text-center" style="background-color:#f0f0f0">

                                                    @foreach ($course as $courses)
                                                    @php
                                                         $x =strtotime($courses->thr) ;
                                                    @endphp
                                                         @if(date('H', $x) >= 16 && date('H', $x)< 17)
                                                                                                                 
                                                         {{ $courses->activity->activity_type }} | {{  $courses->course_name }} | {{  $courses->trainer->trainer_name }}
                                                          
                                                        @endif 
                                                        
                                                        @endforeach
                                                    </td>
                                                    <td class="align-middle text-center" style="background-color:#f0f0f0">

                                                        @foreach ($course as $courses)
                                                        @php
                                                             $x =strtotime($courses->wen) ;
                                                        @endphp
                                                             @if(date('H', $x) >= 16 && date('H', $x)< 17)
                                                                                                                          
                                                             {{ $courses->activity->activity_type }} | {{  $courses->course_name }} | {{  $courses->trainer->trainer_name }}
                                                              
                                                            @endif 
                                                           
                                                            @endforeach
                                                        </td>
                                                        <td class="align-middle text-center" style="background-color:#f0f0f0">

                                                            @foreach ($course as $courses)
                                                            @php
                                                                 $x =strtotime($courses->fri) ;
                                                            @endphp
                                                                 @if(date('H', $x) >= 16 && date('H', $x)< 17)
                                                                                                                          
                                                                 {{ $courses->activity->activity_type }} | {{  $courses->course_name }} | {{  $courses->trainer->trainer_name }}
                                                                  
                                                                @endif 
                                                                
                                                                @endforeach
                                                            </td>
                                </tr>
                                <tr>
                                    <td> 
                                        17:00-18:00
                                    </td>
                                    <td class="align-middle text-center" style="background-color:#f0f0f0">

                                        @foreach ($course as $courses)
                                        @php
                                             $x =strtotime($courses->sat) ;
                                        @endphp
                                             @if(date('H', $x) >= 17 && date('H', $x)< 18)
                                                                                          
                                             {{ $courses->activity->activity_type }} | {{  $courses->course_name }} | {{  $courses->trainer->trainer_name }}
                                              
                                            @endif 
                                            
                                            @endforeach
                                        </td> 
                                        <td class="align-middle text-center" style="background-color:#f0f0f0">

                                            @foreach ($course as $courses)
                                            @php
                                                 $x =strtotime($courses->sun) ;
                                            @endphp
                                                 @if(date('H', $x) >= 17 && date('H', $x)< 18)
                                                                                                
                                                 {{ $courses->activity->activity_type }} | {{  $courses->course_name }} | {{  $courses->trainer->trainer_name }}
                                                  
                                                @endif 
                                                
                                                @endforeach
                                            </td> 
                                            <td class="align-middle text-center" style="background-color:#f0f0f0">

                                            @foreach ($course as $courses)
                                            @php
                                                 $x =strtotime($courses->mon) ;
                                            @endphp
                                                 @if(date('H', $x) >= 17 && date('H', $x)< 18)                                                
                                                 {{ $courses->activity->activity_type }} | {{  $courses->course_name }} | {{  $courses->trainer->trainer_name }}
                                                @endif 
                                                
                                                @endforeach
                                            </td>  
                                            <td class="align-middle text-center" style="background-color:#f0f0f0">

                                                @foreach ($course as $courses)
                                                @php
                                                     $x =strtotime($courses->tus) ;
                                                @endphp
                                                     @if(date('H', $x) >= 17 && date('H', $x)< 18)
                                                                                                        
                                                     {{ $courses->activity->activity_type }} | {{  $courses->course_name }} | {{  $courses->trainer->trainer_name }}
                                                      
                                                    @endif 
                                                    
                                                    @endforeach
                                                </td>
                                                <td class="align-middle text-center" style="background-color:#f0f0f0">

                                                    @foreach ($course as $courses)
                                                    @php
                                                         $x =strtotime($courses->thr) ;
                                                    @endphp
                                                         @if(date('H', $x) >= 17 && date('H', $x)< 18)
                                                         {{ $courses->activity->activity_type }} | {{  $courses->course_name }} | {{  $courses->trainer->trainer_name }}
                                                        @endif 
                                                        
                                                        @endforeach
                                                    </td> 
                                                    <td class="align-middle text-center" style="background-color:#f0f0f0">

                                                        @foreach ($course as $courses)
                                                        @php
                                                             $x =strtotime($courses->wen) ;
                                                        @endphp
                                                             @if(date('H', $x) >= 17 && date('H', $x)< 18)
                                                             {{ $courses->activity->activity_type }} | {{  $courses->course_name }} | {{  $courses->trainer->trainer_name }}
                                                            @endif
                                                           
                                                            @endforeach
                                                        </td>
                                                        <td class="align-middle text-center" style="background-color:#f0f0f0">

                                                            @foreach ($course as $courses)
                                                            @php
                                                                 $x =strtotime($courses->fri) ;
                                                            @endphp
                                                                 @if(date('H', $x) >= 17 && date('H', $x)< 18)
                                                                 {{ $courses->activity->activity_type }} | {{  $courses->course_name }} | {{  $courses->trainer->trainer_name }}
                                                                @endif 
                                                                {{-- <td bgcolor="B9F8D3"></td> --}}
                                                                @endforeach
                                                            </td>
                                </tr>
                                <tr>
                                   <td> 
                                       18:00-19:00
                                   </td>
                                   <td class="align-middle text-center" style="background-color:#f0f0f0">

                                       @foreach ($course as $courses)
                                       @php
                                            $x =strtotime($courses->sat) ;
                                       @endphp
                                            @if(date('H', $x) >= 18 && date('H', $x)< 19)
                                                                                         
                                            {{ $courses->activity->activity_type }} | {{  $courses->course_name }} | {{  $courses->trainer->trainer_name }}
                                             
                                           @endif 
                                           
                                           @endforeach
                                       </td> 
                                       <td class="align-middle text-center" style="background-color:#f0f0f0">

                                           @foreach ($course as $courses)
                                           @php
                                                $x =strtotime($courses->sun) ;
                                           @endphp
                                                @if(date('H', $x) >= 17 && date('H', $x)< 18)
                                                                                               
                                                {{ $courses->activity->activity_type }} | {{  $courses->course_name }} | {{  $courses->trainer->trainer_name }}
                                                 
                                               @endif 
                                               
                                               @endforeach
                                           </td> 
                                           <td class="align-middle text-center" style="background-color:#f0f0f0">

                                           @foreach ($course as $courses)
                                           @php
                                                $x =strtotime($courses->mon) ;
                                           @endphp
                                                @if(date('H', $x) >= 18 && date('H', $x)< 19)                                                
                                                {{ $courses->activity->activity_type }} | {{  $courses->course_name }} | {{  $courses->trainer->trainer_name }}
                                               @endif 
                                               
                                               @endforeach
                                           </td>  
                                           <td class="align-middle text-center" style="background-color:#f0f0f0">

                                               @foreach ($course as $courses)
                                               @php
                                                    $x =strtotime($courses->tus) ;
                                               @endphp
                                                    @if(date('H', $x) >= 18 && date('H', $x)< 19)
                                                                                                       
                                                    {{ $courses->activity->activity_type }} | {{  $courses->course_name }} | {{  $courses->trainer->trainer_name }}
                                                     
                                                   @endif 
                                                   
                                                   @endforeach
                                               </td>
                                               <td class="align-middle text-center" style="background-color:#f0f0f0">

                                                   @foreach ($course as $courses)
                                                   @php
                                                        $x =strtotime($courses->thr) ;
                                                   @endphp
                                                        @if(date('H', $x) >= 18 && date('H', $x)< 19)
                                                        {{ $courses->activity->activity_type }} | {{  $courses->course_name }} | {{  $courses->trainer->trainer_name }}
                                                       @endif 
                                                       
                                                       @endforeach
                                                   </td> 
                                                   <td class="align-middle text-center" style="background-color:#f0f0f0">

                                                       @foreach ($course as $courses)
                                                       @php
                                                            $x =strtotime($courses->wen) ;
                                                       @endphp
                                                            @if(date('H', $x) >= 18 && date('H', $x)< 19)
                                                            {{ $courses->activity->activity_type }} | {{  $courses->course_name }} | {{  $courses->trainer->trainer_name }}
                                                           @endif
                                                          
                                                           @endforeach
                                                       </td>
                                                       <td class="align-middle text-center" style="background-color:#f0f0f0">

                                                           @foreach ($course as $courses)
                                                           @php
                                                                $x =strtotime($courses->fri) ;
                                                           @endphp
                                                                @if(date('H', $x) >= 18 && date('H', $x)< 19)
                                                                {{ $courses->activity->activity_type }} | {{  $courses->course_name }} | {{  $courses->trainer->trainer_name }}
                                                               @endif 
                                                               {{-- <td bgcolor="B9F8D3"></td> --}}
                                                               @endforeach
                                                           </td>
                               </tr>
                            </tbody> 
                    </table>

                </div>
            </div>
        </div>

@stop
