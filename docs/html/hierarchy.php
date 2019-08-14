<!-- HTML header for doxygen 1.8.8-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- For Mobile Devices -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
        <meta name="generator" content="Doxygen 1.8.11"/>
        <script type="text/javascript" src="../../js/jquery-2.1.1.min.js"></script>
        <title>NRE-Math: Class Hierarchy</title>
        <!--<link href="tabs.css" rel="stylesheet" type="text/css"/>-->
        <script type="text/javascript" src="dynsections.js"></script>
        <link href="search/search.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="search/searchdata.js"></script>
<script type="text/javascript" src="search/search.js"></script>
<script type="text/javascript">
  $(document).ready(function() { init_search(); });
</script>
        <link href="doxygen.css" rel="stylesheet" type="text/css" />
        <link href="style.css" rel="stylesheet" type="text/css"/>
        <link href='https://fonts.googleapis.com/css?family=Roboto+Slab' rel='stylesheet' type='text/css'>
        <?php
            include '../../php/navigation.php';
            if (!isset($_COOKIE["theme"]) || $_COOKIE["theme"] == "dark") {
                echo '<link href="../../css/dark/bootstrap.css" rel="stylesheet">';
            } else {
                echo '<link href="../../css/light/bootstrap.css" rel="stylesheet">';
            }
        ?>
        <script src="../../js/bootstrap.min.js"></script>
        <script type="text/javascript" src="doxy-boot.js"></script>
    </head>
    <body>
        <div class="container-fluid">
            <header class="page-header">
                <a href="../../../index.php">
                    <img src="../../img/Logo.png" class="logo img-responsive"/>
                </a>
            </header>
            <?php addNavigationBarInl(false); ?>
            <div id="top"><!-- do not remove this div, it is closed by doxygen! -->
                <div class="content" id="content">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 panel " style="padding-bottom: 15px;">
                                <div style="margin-bottom: 15px;">
<!-- end header part -->
<!-- Generated by Doxygen 1.8.11 -->
<script type="text/javascript">
var searchBox = new SearchBox("searchBox", "search",false,'Search');
</script>
  <div id="navrow1" class="tabs">
    <ul class="tablist">
      <li><a href="index.php"><span>Main&#160;Page</span></a></li>
      <li><a href="namespaces.php"><span>Namespaces</span></a></li>
      <li class="current"><a href="annotated.php"><span>Classes</span></a></li>
      <li><a href="files.php"><span>Files</span></a></li>
      <li>
        <div id="MSearchBox" class="MSearchBoxInactive">
        <span class="left">
          <img id="MSearchSelect" src="search/mag_sel.png"
               onmouseover="return searchBox.OnSearchSelectShow()"
               onmouseout="return searchBox.OnSearchSelectHide()"
               alt=""/>
          <input type="text" id="MSearchField" value="Search" accesskey="S"
               onfocus="searchBox.OnSearchFieldFocus(true)" 
               onblur="searchBox.OnSearchFieldFocus(false)" 
               onkeyup="searchBox.OnSearchFieldChange(event)"/>
          </span><span class="right">
            <a id="MSearchClose" href="javascript:searchBox.CloseResultsWindow()"><img id="MSearchCloseImg" border="0" src="search/close.png" alt=""/></a>
          </span>
        </div>
      </li>
    </ul>
  </div>
  <div id="navrow2" class="tabs2">
    <ul class="tablist">
      <li><a href="annotated.php"><span>Class&#160;List</span></a></li>
      <li><a href="classes.php"><span>Class&#160;Index</span></a></li>
      <li class="current"><a href="hierarchy.php"><span>Class&#160;Hierarchy</span></a></li>
      <li><a href="functions.php"><span>Class&#160;Members</span></a></li>
    </ul>
  </div>
</div><!-- top -->
<!-- window showing the filter options -->
<div id="MSearchSelectWindow"
     onmouseover="return searchBox.OnSearchSelectShow()"
     onmouseout="return searchBox.OnSearchSelectHide()"
     onkeydown="return searchBox.OnSearchSelectKey(event)">
</div>

<!-- iframe showing the search results (closed by default) -->
<div id="MSearchResultsWindow">
<iframe src="javascript:void(0)" frameborder="0" 
        name="MSearchResults" id="MSearchResults">
</iframe>
</div>

<div class="header">
  <div class="headertitle">
<div class="title">Class Hierarchy</div>  </div>
</div><!--header-->
<div class="contents">
<div class="textblock">This inheritance list is sorted roughly, but not completely, alphabetically:</div><div class="directory">
<div class="levels">[detail level <span onclick="javascript:toggleLevel(1);">1</span><span onclick="javascript:toggleLevel(2);">2</span>]</div><table class="directory">
<tr id="row_0_" class="even"><td class="entry"><span style="width:16px;display:inline-block;">&#160;</span><span class="icona"><span class="icon">C</span></span><a class="el" href="class_n_r_e_1_1_utility_1_1_array.php" target="_self">NRE::Utility::Array&lt; T, Size &gt;</a></td><td class="desc">A fixed size array </td></tr>
<tr id="row_1_"><td class="entry"><span style="width:16px;display:inline-block;">&#160;</span><span class="icona"><span class="icon">C</span></span><a class="el" href="class_n_r_e_1_1_utility_1_1_basic_string.php" target="_self">NRE::Utility::BasicString&lt; T &gt;</a></td><td class="desc">A basic template string, with dynamic size, guarantee to be in contiguous memory </td></tr>
<tr id="row_2_" class="even"><td class="entry"><span style="width:0px;display:inline-block;">&#160;</span><span id="arr_2_" class="arrow" onclick="toggleFolder('2_')">&#9660;</span><span class="icona"><span class="icon">C</span></span><a class="el" href="class_n_r_e_1_1_utility_1_1_bucket_entry_hash.php" target="_self">NRE::Utility::BucketEntryHash&lt; StoreHash &gt;</a></td><td class="desc">Used to store the key hash, or not depending on the template value </td></tr>
<tr id="row_2_0_"><td class="entry"><span style="width:32px;display:inline-block;">&#160;</span><span class="icona"><span class="icon">C</span></span><a class="el" href="class_n_r_e_1_1_utility_1_1_bucket_entry.php" target="_self">NRE::Utility::BucketEntry&lt; NRE::Utility::Pair, STORE_HASH &gt;</a></td><td class="desc"></td></tr>
<tr id="row_2_1_" class="even"><td class="entry"><span style="width:32px;display:inline-block;">&#160;</span><span class="icona"><span class="icon">C</span></span><a class="el" href="class_n_r_e_1_1_utility_1_1_bucket_entry.php" target="_self">NRE::Utility::BucketEntry&lt; ValueType, StoreHash &gt;</a></td><td class="desc">A bucket entry used as the hash table elements </td></tr>
<tr id="row_3_"><td class="entry"><span style="width:16px;display:inline-block;">&#160;</span><span class="icona"><span class="icon">C</span></span><a class="el" href="class_n_r_e_1_1_utility_1_1_bucket_entry_hash_3_01true_01_4.php" target="_self">NRE::Utility::BucketEntryHash&lt; true &gt;</a></td><td class="desc"></td></tr>
<tr id="row_4_" class="even"><td class="entry"><span style="width:16px;display:inline-block;">&#160;</span><span class="icona"><span class="icon">C</span></span><a class="el" href="class_n_r_e_1_1_utility_1_1_forward_list_1_1_forward_iterator.php" target="_self">NRE::Utility::ForwardList&lt; T &gt;::ForwardIterator&lt; K &gt;</a></td><td class="desc">Internal iterator for forward list </td></tr>
<tr id="row_5_"><td class="entry"><span style="width:16px;display:inline-block;">&#160;</span><span class="icona"><span class="icon">C</span></span><a class="el" href="class_n_r_e_1_1_utility_1_1_hash_table_1_1_forward_iterator.php" target="_self">NRE::Utility::HashTable&lt; Key, T, StoreHash, Hash, KeyEqual &gt;::ForwardIterator&lt; K &gt;</a></td><td class="desc">Hash table forward iterator </td></tr>
<tr id="row_6_" class="even"><td class="entry"><span style="width:16px;display:inline-block;">&#160;</span><span class="icona"><span class="icon">C</span></span><a class="el" href="class_n_r_e_1_1_utility_1_1_forward_list.php" target="_self">NRE::Utility::ForwardList&lt; T &gt;</a></td><td class="desc">A simple linked list </td></tr>
<tr id="row_7_"><td class="entry"><span style="width:0px;display:inline-block;">&#160;</span><span id="arr_7_" class="arrow" onclick="toggleFolder('7_')">&#9660;</span><span class="icona"><span class="icon">C</span></span><b>Hash</b></td><td class="desc"></td></tr>
<tr id="row_7_0_" class="even"><td class="entry"><span style="width:32px;display:inline-block;">&#160;</span><span class="icona"><span class="icon">C</span></span><a class="el" href="class_n_r_e_1_1_utility_1_1_hash_table.php" target="_self">NRE::Utility::HashTable&lt; Key, T, StoreHash, Hash, KeyEqual &gt;</a></td><td class="desc">Based on TSL Robin Hash, An hashtable used in map and set, an associative container using linear probing, robin hood and shift back optimisation </td></tr>
<tr id="row_8_"><td class="entry"><span style="width:0px;display:inline-block;">&#160;</span><span id="arr_8_" class="arrow" onclick="toggleFolder('8_')">&#9660;</span><span class="icona"><span class="icon">C</span></span><b>KeyEqual</b></td><td class="desc"></td></tr>
<tr id="row_8_0_" class="even"><td class="entry"><span style="width:32px;display:inline-block;">&#160;</span><span class="icona"><span class="icon">C</span></span><a class="el" href="class_n_r_e_1_1_utility_1_1_hash_table.php" target="_self">NRE::Utility::HashTable&lt; Key, T, StoreHash, Hash, KeyEqual &gt;</a></td><td class="desc">Based on TSL Robin Hash, An hashtable used in map and set, an associative container using linear probing, robin hood and shift back optimisation </td></tr>
<tr id="row_9_"><td class="entry"><span style="width:16px;display:inline-block;">&#160;</span><span class="icona"><span class="icon">C</span></span><a class="el" href="class_n_r_e_1_1_utility_1_1_hash_table_1_1_local_forward_iterator.php" target="_self">NRE::Utility::HashTable&lt; Key, T, StoreHash, Hash, KeyEqual &gt;::LocalForwardIterator&lt; K &gt;</a></td><td class="desc">Hash table local forward iterator </td></tr>
<tr id="row_10_" class="even"><td class="entry"><span style="width:16px;display:inline-block;">&#160;</span><span class="icona"><span class="icon">C</span></span><a class="el" href="class_n_r_e_1_1_utility_1_1_observable.php" target="_self">NRE::Utility::Observable</a></td><td class="desc">Describe an observable object, coupled with observer </td></tr>
<tr id="row_11_"><td class="entry"><span style="width:16px;display:inline-block;">&#160;</span><span class="icona"><span class="icon">C</span></span><a class="el" href="class_n_r_e_1_1_utility_1_1_observer.php" target="_self">NRE::Utility::Observer</a></td><td class="desc">Describe an observer object attached to an <a class="el" href="class_n_r_e_1_1_utility_1_1_observable.php" title="Describe an observable object, coupled with observer. ">Observable</a> </td></tr>
<tr id="row_12_" class="even"><td class="entry"><span style="width:16px;display:inline-block;">&#160;</span><span class="icona"><span class="icon">C</span></span><a class="el" href="class_n_r_e_1_1_utility_1_1_pair.php" target="_self">NRE::Utility::Pair&lt; T, K &gt;</a></td><td class="desc">A basic template pair </td></tr>
<tr id="row_13_"><td class="entry"><span style="width:16px;display:inline-block;">&#160;</span><span class="icona"><span class="icon">C</span></span><a class="el" href="class_n_r_e_1_1_utility_1_1_singleton.php" target="_self">NRE::Utility::Singleton&lt; T &gt;</a></td><td class="desc">Describe a singleton object </td></tr>
<tr id="row_14_" class="even"><td class="entry"><span style="width:16px;display:inline-block;">&#160;</span><span class="icona"><span class="icon">C</span></span><a class="el" href="class_n_r_e_1_1_utility_1_1_unordered_map.php" target="_self">NRE::Utility::UnorderedMap&lt; Key, T, StoreHash, Hash, KeyEqual &gt;</a></td><td class="desc">An unordered map, associative unordered container </td></tr>
<tr id="row_15_"><td class="entry"><span style="width:16px;display:inline-block;">&#160;</span><span class="icona"><span class="icon">C</span></span><a class="el" href="class_n_r_e_1_1_utility_1_1_vector.php" target="_self">NRE::Utility::Vector&lt; T &gt;</a></td><td class="desc">A dynamic array, guarantee to be in contiguous memory </td></tr>
<tr id="row_16_" class="even"><td class="entry"><span style="width:16px;display:inline-block;">&#160;</span><span class="icona"><span class="icon">C</span></span><a class="el" href="class_n_r_e_1_1_utility_1_1_vector.php" target="_self">NRE::Utility::Vector&lt; NRE::Utility::BucketEntry&lt; NRE::Utility::Pair, STORE_HASH &gt; &gt;</a></td><td class="desc"></td></tr>
<tr id="row_17_"><td class="entry"><span style="width:16px;display:inline-block;">&#160;</span><span class="icona"><span class="icon">C</span></span><a class="el" href="class_n_r_e_1_1_utility_1_1_vector.php" target="_self">NRE::Utility::Vector&lt; NRE::Utility::Observer * &gt;</a></td><td class="desc"></td></tr>
</table>
</div><!-- directory -->
</div><!-- contents -->
<!-- HTML footer for doxygen 1.8.8-->
<!-- start footer part -->
</div>
</div>
</div>
</div>
</div>
</div>
</body>
</html>
