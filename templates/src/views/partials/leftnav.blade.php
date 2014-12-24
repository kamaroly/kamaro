     <aside data-ng-include=" &#39;views/nav.html&#39; " id="nav-container" class="nav-container ng-scope nav-fixed nav-vertical bg-dark">        
<div class="nav-wrapper ng-scope">
    <div class="slimScrollDiv" >
        <ul  class="nav"  style="overflow: hidden; width: auto; height: 100%;">
        <li class="active"><a href="/"> <i class="ti-home"></i>
            <span ="Dashboard">Dashboard</span> </a></li>
        <li>
            <a href="/sales"><i class="ti-shopping-cart-full"></i>
                <span>{{Lang::get('sales::sale.sale')}}</span></a>
            <i class="ti-angle-double-right icon-has-ul"></i>
       </li>
        <li>
            <a href="/items"><i class="ti-layout-column4"></i>
                <span >{{Lang::get('items::item.item')}}</span></a>
              <i class="ti-angle-double-right icon-has-ul"></i>
       </li>
        <li>
            <a href="#pages"><i class="ti-files"></i>
                <span ="Pages">Pages</span></a>
       <i class="ti-angle-double-right icon-has-ul"></i></li>
        <li>
            <a href="#table"><i class="ti-layout-grid4"></i>
                <span ="Tables">Tables</span></a>
          <i class="ti-angle-double-right icon-has-ul"></i></li>
        <li>
            <a href="#form"><i class="ti-pencil"></i>
                <span ="Forms">Forms</span></a><i class="ti-angle-double-right icon-has-ul"></i></li>
       <li>
            <a href="#charts"><i class="ti-bar-chart"></i>
                <span ="Charts">Charts</span></a>
          <i class="ti-angle-double-right icon-has-ul"></i></li>
        <li class="nav-task">
            <a href="#tasks/tasks">
                <i class="ti-check-box"></i>
                <span ="Tasks">Tasks</span>
                <span class="badge badge-danger main-badge ng-binding" data-ng-show="taskRemainingCount &gt; 0">7</span>
            </a>
        </li>
        <li>
            <a href="#mail"><i class="ti-email"></i>
                <span ="Mail">Mail</span></a>
          <i class="ti-angle-double-right icon-has-ul"></i>
     </li>
    </ul>
</div>
  </div>
</aside>