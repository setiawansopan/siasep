<!-- Side Nav START -->
<div class="side-nav expand-lg">
    <div class="side-nav-inner">
        <ul class="side-nav-menu">
            <li class="side-nav-header">
                <span>Navigation</span>
            </li>
            <li class="nav-item dropdown <?php if ($title == 'Dashboard') echo 'open'; ?>">
                <a href="/">
                    <span class="icon-holder">
                        <i class="lni-dashboard"></i>
                    </span>
                    <span class="title">Dashboard</span>
                </a>
            </li>
            <li class="nav-item dropdown <?php if ($title == 'Status') echo 'open'; ?>">
                <a class="dropdown-toggle" href="/status">
                    <span class="icon-holder">
                        <i class="lni-cloud"></i>
                    </span>
                    <span class="title">Status</span>
                </a>
            </li>
            <li class="nav-item dropdown <?php if ($title == 'Laporan') echo 'open'; ?>">
                <a class="dropdown-toggle" href="/laporan">
                    <span class="icon-holder">
                        <i class="lni-layers"></i>
                    </span>
                    <span class="title">Laporan</span>
                </a>
            </li>
            <li class="nav-item dropdown <?php if ($title == 'Perijinan') echo 'open'; ?>">
                <a class="dropdown-toggle" href="/perijinan">
                    <span class="icon-holder">
                        <i class="lni-timer"></i>
                    </span>
                    <span class="title">Perijinan</span>
                </a>
            </li>
            <li class="nav-item dropdown <?php if ($title == 'Kegiatan') echo 'open'; ?>">
                <a class="dropdown-toggle" href="/kegiatan">
                    <span class="icon-holder">
                        <i class="lni-package"></i>
                    </span>
                    <span class="title">Kegiatan</span>
                </a>
            </li>
            <li class="nav-item dropdown <?php if ($title == 'Usulan') echo 'open'; ?>">
                <a class="dropdown-toggle" href="usulan">
                    <span class="icon-holder">
                        <i class="lni-files"></i>
                    </span>
                    <span class="title">Usulan</span>
                </a>
            </li>
        </ul>
    </div>
</div>
<!-- Side Nav END -->