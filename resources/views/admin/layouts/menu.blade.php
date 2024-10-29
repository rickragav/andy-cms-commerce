<div id="aside" class="app-aside modal fade folded md nav-expand">
    <div class="left navside dark dk" layout="column">

        <div class="navbar navbar-md no-radius">
            <a class="hidden-folded inline folded-toggle m-t p-t-xs pull-right">
                <i class="material-icons md-24 opacity">&#xe5d2;</i>
            </a>
            <!-- brand -->
            <a class="navbar-brand" href="">
                <img src="{{ asset('assets/dashboard/images/logo.png') }}" alt="Control">
                <span class="hidden-folded inline">Andycms</span>
            </a>
            <!-- / brand -->
        </div>
        <div flex class="hide-scroll">
            <nav class="scroll nav-active-primary">

                <ul class="nav" ui-nav>
                    <li class="nav-header hidden-folded">
                        <small class="text-muted">Manage Content</small>
                    </li>

                    <li>
                        <a href="">
                            <span class="nav-icon">
                                <i class="material-icons">&#xe2c7;</i>
                            </span>
                            <span class="nav-text">Category</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{route('media-manager.index')}}">
                            <span class="nav-icon">
                                <i class="material-icons">&#xe2c7;</i>
                            </span>
                            <span class="nav-text">Photos</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
