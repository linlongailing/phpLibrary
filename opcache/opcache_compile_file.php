<?php
//可以在不运行脚本的前提下，编译脚本并加载到opcache缓存中

echo opcache_complie_file("./test.php");