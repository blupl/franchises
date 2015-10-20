
<ul class="nav navbar-nav">
    <li role="presentation" class="dropdown">
        <a id="" href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
            New Form
            <span class="caret"></span>
        </a>
        <ul id="menu6" class="dropdown-menu animated fadeInDown" role="menu">
            {{--<li role="presentation"><a role="menuitem" tabindex="-1" href="{{ handles('blupl/franchise::management') }}">List</a></li>--}}
            <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ handles('blupl/franchise::management/franchise') }}">Franchise</a></li>
            <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ handles('blupl/franchise::management/player') }}">Player</a></li>
            <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ handles('blupl/franchise::management/team-managements') }}">Team Managements</a></li>
            <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ handles('blupl/franchise::management/team-support-stuffs') }}">Team Support Stuffs</a></li>
            <li role="presentation" class="divider"></li>
            <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ handles('blupl/franchise::management') }}">Management</a></li>
        </ul>
    </li>
</ul>

