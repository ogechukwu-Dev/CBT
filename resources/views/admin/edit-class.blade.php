@include('layout.head')
@include('layout.header')
@include('layout.sidebar')
<div class="app-main__outer">
    <div class="app-main__inner">

        <div class="tab-content">
                        <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                            <div class="row">
                                <div class="col-lg-8">
                                        <div class="main-card mb-3 card">
                                            <div class="card-body">
                                    <h5 class="card-title">Edit Class</h5>
                                    <form action="{{ route('edit_class', $postedit->unique_id)}}" method="post">
                                    @csrf
                                        <div class="position-relative row form-group">
                                            <label for="exampleEmail" class="col-sm-2 col-form-label">Class Name</label>
                                            <div class="col-sm-10">
                                            {{--  <input type="text" name="id" value="{{ $postedit->id }}" hidden/>  --}}
                                                <input name="classname" placeholder="Enter Class Name" type="text" class="form-control" value="{{ $postedit->class_name }}" required>
                                            </div>
                                        </div>
                                        <div class="position-relative row form-group">
                                            <label class="col-sm-2 col-form-label">Class Code</label>
                                            <div class="col-sm-10">
                                                <input name="classcode" type="text" placeholder="Enter Class Code" class="form-control" value="{{ $postedit->class_code }}" required>
                                            </div>
                                        </div>
                                        
                                        <div class="position-relative row form-check">
                                            <div class="col-md-12">
                                            <center>
                                                       <button type="submit" class="ladda-button mb-2 mr-2 btn btn-shadow btn-warning" data-style="slide-down">
                                                            <span class="ladda-label">Edit Class</span>
                                                            
                                                        <span class="ladda-spinner"></span><div class="ladda-progress" style="width: 0px;"></div></button>
                                                          
                                                        </button>
                                                        </center>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="main-card mb-3 card">
                                            <div class="card-body">
                                                <h5 class="card-title">All classes</h5>
                                                <?php 
                                                function pick(){
                                                $arr = ['btn btn-shadow-primary btn-primary','btn btn-shadow-secondary btn-secondary','btn btn-shadow-success btn-success',' btn btn-shadow-info btn-info','btn btn-shadow-info btn-info','btn btn-shadow-warning btn-warning','btn btn-shadow-danger btn-danger','btn btn-shadow-focus btn-focus','btn btn-shadow-alternate btn-alternate','btn btn-shadow-light btn-light','btn btn-shadow-dark btn-dark'];
                                                    $rand = rand(0,10);
                                                    return $arr[$rand];
                                                }
                                                ?>
                                                <button class="col-lg-12 mb-2 mr-2 btn btn-shadow-light btn-light">
                                                <a style="color:inherit!important;text-decoration:none;" href="{{ route('allClasses') }}"> 
                                                View all Classes
                                                </a>
                                                </button>
                                                <hr />
                                               @foreach ($allclasses as $classes)
                                                   <button class="col-lg-12 mb-2 mr-2 {{ pick()}}">
                                                   <a style="color:inherit!important;text-decoration:none;" href="/EditClass/{{ $classes->unique_id }}">
                                                   {{ $classes->class_name }}
                                                   </a>
                                                   </button>
                                               @endforeach
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               
                        </div>
        </div>
    </div>






@include('layout.footerdash')


</body>
</html>