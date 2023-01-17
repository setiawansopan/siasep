<!-- Side Nav START -->
<div class="side-nav expand-lg">
    <div class="side-nav-inner">
        <ul class="side-nav-menu">
            <br>
            <li class="nav-item dropdown <?php if ($title == 'Dashboard') echo 'open'; ?>">
                <a href="/">
                    <span class="icon-holder">
                        <i class="lni-home"></i>
                    </span>
                    <span class="title">Dashboard</span>
                </a>
            </li>
            <br>
            <li class="nav-item dropdown <?php if ($title == 'Status') echo 'open'; ?>">
                <a href="/status">
                    <span class="icon-holder">
                        <i class="lni-list"></i>
                    </span>
                    <span class="title">Status</span>
                </a>
            </li>
            <br>
            <li class="nav-item dropdown <?php if ($title == 'Laporan') echo 'open'; ?>">
                <a href="/laporan">
                    <span class="icon-holder">
                        <i class="lni-magnifier"></i>
                    </span>
                    <span class="title">Laporan</span>
                </a>
            </li>
            <br>
            <li class="nav-item dropdown <?php if ($title == 'Perijinan') echo 'open'; ?>">
                <a href="/perijinan">
                    <span class="icon-holder">
                        <i class="lni-check-mark-circle"></i>
                    </span>
                    <span class="title">Perijinan</span>
                </a>
            </li>
            <br>
            <li class="nav-item dropdown <?php if ($title == 'Pemeliharaan') echo 'open'; ?>">
                <a href="/pemeliharaan">
                    <span class="icon-holder">
                        <i class="lni-calendar"></i>
                    </span>
                    <span class="title">Kegiatan</span>
                </a>
            </li>
            <br>
            <li class="nav-item dropdown <?php if ($title == 'Usulan') echo 'open'; ?>">
                <a href="usulan">
                    <span class="icon-holder">
                        <i class="lni-bullhorn"></i>
                    </span>
                    <span class="title">Usulan</span>
                </a>
            </li>
        </ul>
    </div>
</div>
<!-- Side Nav END -->