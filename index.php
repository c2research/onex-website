<?php include 'header.php'; ?>

<!-- Page Content -->
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <h1>ONEX: Online Exploration of Time Series</h1>
            <p>Finding similar trends among time series data is critical for applications ranging from financial planning to 
                policy making. The detection of these multifaceted relationships, especially time warped matching of time series
                of different lengths and alignments is prohibitively expensive to compute. To achieve real time responsiveness on
                large time series datasets, we propose a novel paradigm called Online Exploration of Time Series (ONEX) employing
                a powerful one-time preprocessing step that encodes critical similarity relationships to support subsequent rapid
                data exploration. Since the encoding of a huge number of pairwise similarity relationships for all variable lengths
                time series segments is not feasible, our work rests on the important insight that clustering with inexpensive 
                point-to-point distances such as the Euclidean Distance can support subsequent time warped matching.
                Our ONEX framework overcomes the prohibitive computational costs associated with a more robust elastic distance namely
                the DTW by applying it over the surprisingly compact knowledge base instead of the raw data.</p>
            <br/>            
            <div>
                <img src="images/onex_base.png" width=300>
                <img src="images/group_heat_map_all.png" width=300>
            </div>
            <!-- <p>Our comparative study reveals that ONEX is up to 19% more accurate and several times faster than the state-of-the-art.
                Beyond being a highly accurate and fast domain independent solution, ONEX offers a truly interactive exploration
                experience supporting novel time series operations.</p> -->

            <!-- Use this if want to toggle/untoggle menu <a href="#menu-toggle" class="btn btn-secondary" id="menu-toggle">Toggle Menu</a> -->
        </div>
    </div>
    <!-- /#page-content-wrapper -->



<?php include 'footer.php'; ?>