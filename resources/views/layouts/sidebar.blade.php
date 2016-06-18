<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset("/bower_components/AdminLTE/dist/img/user2-160x160.jpg") }}" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p><?=Auth::user()->name;?></p>
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
<span class="input-group-btn">
  <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
</span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            
            
            <li class="treeview">
                <a href="#"><span>Configuration</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{url('country')}}">Country </a></li>
                    <li><a href="#">State</a></li>
                    <li><a href="#">District</a></li>
                    <li><a href="#">Payment Mode</a></li>
                    <li><a href="#">Student Catagory</a></li>
                    <li><a href="#">Session</a></li>
                    <li><a href="#">Class</a></li>
                    <li><a href="#">Section</a></li>
                    <li><a href="#">Class Section Relation</a></li>
                    <li><a href="#">Subject Type</a></li>
                   
                    
                    
                </ul>
            </li>

             <li class="treeview">
                <a href="#"><span>Academic</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    
                    <li><a href="#">Subject</a></li>
                    <li><a href="#">Class Wise Subject List</a></li>
                    <li><a href="#">Special Course</a></li>
                    <li><a href="#">Time Table</a></li>
                    <li><a href="#">Teacher Wise Time Table</a></li>
                    <li><a href="#">Assignments</a></li>
                    <li><a href="#">Certification</a></li>
                    <li><a href="#">Circular</a></li>
                </ul>
            </li>

             <li class="treeview">
                <a href="#"><span>Student</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#">Student List</a></li>
                    <li><a href="#">New Admission</a></li>
                    <li><a href="#">Upgrade Admission</a></li>
                    <li><a href="#">Student Attendance</a></li>
                    <li><a href="#">Notification</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#"><span>Examination</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#">CCE</a></li>
                    <li><a href="#">GPA</a></li>
                    <li><a href="#">Exam Dates</a></li>
                    <li><a href="#">Sitting Plan</a></li>
                    <li><a href="#">Student Result</a></li>
                    <li><a href="#">Question Papers</a></li>

                </ul>
            </li>

             <li class="treeview">
                <a href="#"><span>Finance</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#">Fee Catagory</a></li>
                    <li><a href="#">Fee Allocation</a></li>
                    <li><a href="#">Special Fee</a></li>
                    <li><a href="#">Account Group</a></li>
                    <li><a href="#">Voucher Master</a></li>
                    <li><a href="#">Voucher Head</a></li>
                    <li><a href="#">Create Voucher</a></li>
                    <li><a href="#">Day Book</a></li>
                    <li><a href="#">Cash Book</a></li>
                    <li><a href="#">Bank Book</a></li>
                   
                </ul>
            </li>
             <li class="treeview">
                <a href="#"><span>HR and Payroll</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#">Pay Head</a></li>
                    <li><a href="#">Salary Assign</a></li>
                    <li><a href="#">Salary Slip</a></li>
                    <li><a href="#">Generate Salary</a></li>
                </ul>
            </li>
             <li class="treeview">
                <a href="#"><span>Employee Management</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#">New Employee</a></li>
                    <li><a href="#">Employee List</a></li>
                    <li><a href="#">Attendance Performance</a></li>
                    <li><a href="#">Result Performance</a></li>
                    <li><a href="#">Attendance</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><span>Leave Management</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#">Leave Catagory</a></li>
                    <li><a href="#">Leave Details</a></li>
                    <li><a href="#">Leave Application</a></li>
                    <li><a href="#">Leave Approvals</a></li>

                </ul>
            </li>


             <li class="treeview">
                <a href="#"><span>Library</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#">Add Catagory</a></li>
                    <li><a href="#">Add Books</a></li>
                    <li><a href="#">Issue Book</a></li>
                    <li><a href="#">Book Return</a></li>
                    <li><a href="#">Pending Books</a></li>
                    
                   
                </ul>
            </li>

             <li class="treeview">
                <a href="#"><span>Transport</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#">Transport</a></li>
                    <li><a href="#">Route</a></li>
                    <li><a href="#">Route Immediate Stations</a></li>
                    <li><a href="#">Transport Route Allocation</a></li>
                    <li><a href="#">Assign Driver</a></li>
                    <li><a href="#">Fuel Record</a></li>
                    <li><a href="#">Maintenance Record</a></li>
                    <li><a href="#">Reports</a></li>
                </ul>
            </li>

             <li class="treeview">
                <a href="#"><span>Hostel</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#">Hostel Details</a></li>
                    <li><a href="#">Hostel Room</a></li>
                    <li><a href="#">Room Allocation</a></li>
                    <li><a href="#">Request Details</a></li>
                    <li><a href="#">Hostel Transfer/Vacate</a></li>
                    <li><a href="#">Hostel Register</a></li>
                    <li><a href="#">Visitors</a></li>
                    <li><a href="#">Performance Report</a></li>
                    <li><a href="#">Payment Pending Report</a></li>
                    <li><a href="#">New Payment</a></li>
                </ul>
            </li>

             <li class="treeview">
                <a href="#"><span>Messages</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#">Catagory</a></li>
                    <li><a href="#">Compose Single Message</a></li>
                    <li><a href="#">Bulk Message</a></li>
                    <li><a href="#">Reports</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#"><span>Store Management</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#">Catagory</a></li>
                    <li><a href="#">New Item</a></li>
                    <li><a href="#">Sell Item</a></li>
                    <li><a href="#">Move Item</a></li>
                    <li><a href="#">Reports</a></li>
                </ul>
            </li>

             <li class="treeview">
                <a href="#"><span>Event Management</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#">New Event</a></li>
                    <li><a href="#">Upcoming event</a></li>
                    <li><a href="#">Previous Record</a></li>
                </ul>
            </li>

             <li class="treeview">
                <a href="#"><span>Reports</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#">Student Attendance Report</a></li>
                    <li><a href="#">Employee Attendance Report</a></li>
                    <li><a href="#">Financial Reports</a></li>
                    <li><a href="#">Student Performance Report</a></li>
                    <li><a href="#">Class Performance Report</a></li>
                    <li><a href="#">School Performance Report</a></li>
                    <li><a href="#">Fee Submit Report</a></li>
                    <li><a href="#">Fee Pending Report</a></li>
                    <li><a href="#">Admission Report </a></li>
                    <li><a href="#">Exam Reports</a></li>

                </ul>
            </li>

             <li class="treeview">
                <a href="#"><span>Access Rights</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#">Assign Rights</a></li>
                    <li><a href="#">View Rights</a></li>
                </ul>
            </li>


             <li class="treeview">
                <a href="#"><span>Mail</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#">Compose</a></li>
                    <li><a href="#">Inbox</a></li>
                    <li><a href="#">Sent</a></li>
                    <li><a href="#">Draft</a></li>
                </ul>
            </li>

             
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>