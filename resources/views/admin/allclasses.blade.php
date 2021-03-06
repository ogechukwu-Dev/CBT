@include('layout.head')
@include('layout.header')
@include('layout.sidebar')
<div class="app-main__outer">
    <div class="app-main__inner">

                    <div class="tab-content">
                        <div class="main-card mb-3 card">
                            <div class="card-body">
                                <table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>NAME</th>
                                        <th>CLASS CODE</th>
                                        <th>ACTION</th>
                                        
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($allclasses as $class)
                                         <tr>
                                        <td>{{ $class->id }}</td>
                                        <td>{{ $class->class_name }}</td>
                                        <td>{{ $class->class_code }}</td>
                                        <td><div class="btn btn-group">
                                            <a type="button" href="/EditClass/{{ $class->unique_id }}" class="border-0 btn-transition btn btn-outline-info"><i class="fa fa-edit"></i></a>
                                            <div class="border-0 btn-transition btn btn-outline-danger">
                                                <i class="fa fa-trash-alt"></i></div>
                                            </div>
                                        </div></td>
                                        
                                    </tr>
                                    @endforeach
                                   
                                    
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                         <th>S/N</th>
                                        <th>NAME</th>
                                        <th>CLASS CODE</th>
                                        <th>ACTION</th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
    </div>

@include('layout.footerdash')
</body>
</html>