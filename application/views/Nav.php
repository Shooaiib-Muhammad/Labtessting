<nav class="grid__item" id="AccessibleNav">
   <!-- for mobile -->
   <ul id="siteNav" class="site-nav medium right hidearrow">
      <li class="lvl1 parent megamenu"><a href="#" style="background-color:black;color:white;padding:5px;border-radius:10px">Explore<i class="anm anm-angle-down-l"></i></a>
         <div class="megamenu style1">
            <ul class="grid mmWrapper">
               <li class="grid__item large-up--one-whole">
                  <ul class="grid">
                     <?php
                     //print_r($getData);
                     // foreach ($getData as $keys) {
                     //     if ($keys['Type'] == 'Balls') {
                     //         $Type = $keys['Type'];
                     //     }
                     // }
                     ?>
                     <li class="grid__item lvl-1 col-md-3 col-lg-3"><a href="#" class="site-nav lvl-1">Innovations </a>
                        <ul class="subLinks">

                           <li class="lvl-2"><a href="<?php echo base_url(); ?>innovation" class="site-nav lvl-2">Innovations</a></li>



                        </ul>
                     </li>
                     <li class="grid__item lvl-1 col-md-3 col-lg-3"><a href="#" class="site-nav lvl-1">Bags</a>
                        <ul class="subLinks">

                           <li class="lvl-2"><a href="<?php echo base_url(); ?>ProductDetails/test/" class="site-nav lvl-2">
                              </a></li>

                        </ul>
                     </li>
                     <li class="grid__item lvl-1 col-md-3 col-lg-3"><a href="#" class="site-nav lvl-1">Raw Material</a>
                        <ul class="subLinks">

                           <li class="lvl-2"><a href="<?php echo base_url(); ?>ProductDetails/test/" class="site-nav lvl-2">sasas</a></li>


                        </ul>
                     </li>


                  </ul>
               </li>
            </ul>
         </div>
      </li>

      <li class="lvl1 parent megamenu"><a href="#" style="background-color:black;color:white;padding:5px;border-radius:10px">Test Services <i class="anm anm-angle-down-l"></i></a>
         <div class="megamenu style1">
            <ul class="grid mmWrapper">
               <li class="grid__item large-up--one-whole">
                  <ul class="grid">
                     <?php
                     //print_r($getData);
                     // foreach ($getData as $keys) {
                     //     if ($keys['Type'] == 'Balls') {
                     //         $Type = $keys['Type'];
                     //     }
                     // }
                     ?>
                     <li class="grid__item lvl-1 col-md-3 col-lg-3"><a href="#" class="site-nav lvl-1">Balls </a>
                        <ul class="subLinks">
                           <?php
                           foreach ($getData as $keys) {
                              if ($keys['TestType'] == 'Test') {
                                 if ($keys['Type'] == 'Balls') {
                                    $Name = $keys['Name'];
                                    $TestID = $keys['TestID'];
                           ?>
                                    <li class="lvl-2"><a href="<?php echo base_url(); ?>ProductDetails/test/<?php echo $TestID; ?>" class="site-nav lvl-2"><?php echo $Name; ?></a></li>
                           <?php
                                 }
                              }
                           }
                           ?>


                        </ul>
                     </li>
                     <li class="grid__item lvl-1 col-md-3 col-lg-3"><a href="#" class="site-nav lvl-1">Bags</a>
                        <ul class="subLinks">
                           <?php
                           foreach ($getData as $keys) {
                              if ($keys['TestType'] == 'Test') {
                                 if ($keys['Type'] == 'Bags') {
                                    $Name = $keys['Name'];
                                    $TestID = $keys['TestID'];
                           ?>
                                    <li class="lvl-2"><a href="<?php echo base_url(); ?>ProductDetails/test/<?php echo $TestID; ?>" class="site-nav lvl-2"><?php echo $Name; ?></a></li>
                           <?php
                                 }
                              }
                           }
                           ?>
                        </ul>
                     </li>
                     <li class="grid__item lvl-1 col-md-3 col-lg-3"><a href="#" class="site-nav lvl-1">Raw Material</a>
                        <ul class="subLinks">
                           <?php


                           foreach ($getData as $keys) {
                              if ($keys['TestType'] == 'Test') {
                                 if ($keys['Type'] == 'Raw Material') {
                                    $Name = $keys['Name'];
                                    $TestID = $keys['TestID'];
                           ?>
                                    <li class="lvl-2"><a href="<?php echo base_url(); ?>ProductDetails/test/<?php echo $TestID; ?>" class="site-nav lvl-2"><?php echo $Name; ?></a></li>
                           <?php
                                 }
                              }
                           }
                           ?>

                        </ul>
                     </li>


                  </ul>
               </li>
            </ul>
         </div>
      </li>
      <li class="lvl1 parent megamenu"><a href="#" style="background-color:black;color:white;padding:5px;border-radius:10px">Offered Packages <i class="anm anm-angle-down-l"></i>
         </a>
         <div class="megamenu style4">
            <ul class="grid grid--uniform mmWrapper">
               <li class="grid__item lvl-1 col-md-3 col-lg-3"><a href="#" class="site-nav lvl-1">Balls</a>
                  <ul class="subLinks">
                     <?php
                     foreach ($getData as $keys) {
                        if ($keys['TestType'] == 'Package') {
                           if ($keys['Type'] == 'Balls') {
                              $Name = $keys['Name'];
                              $TestID = $keys['TestID'];
                     ?>
                              <li class="lvl-2"><a href="<?php echo base_url(); ?>ProductDetails/test/<?php echo $TestID; ?>" class="site-nav lvl-2"><?php echo $Name; ?></a></li>
                     <?php
                           }
                        }
                     }
                     ?>
                  </ul>
               </li>
               <li class="grid__item lvl-1 col-md-3 col-lg-3"><a href="#" class="site-nav lvl-1">Bags</a>
                  <ul class="subLinks">
                     <?php
                     foreach ($getData as $keys) {
                        if ($keys['TestType'] == 'Package') {
                           if ($keys['Type'] == 'Bags') {
                              $Name = $keys['Name'];
                              $TestID = $keys['TestID'];
                     ?>
                              <li class="lvl-2"><a href="<?php echo base_url(); ?>ProductDetails/test/<?php echo $TestID; ?>" class="site-nav lvl-2"><?php echo $Name; ?></a></li>
                     <?php
                           }
                        }
                     }
                     ?>
                  </ul>
               </li>


               <li class="grid__item lvl-1 col-md-3 col-lg-3"><a href="#" class="site-nav lvl-1">Raw Material</a>
                  <ul class="subLinks">
                     <?php

                     foreach ($getData as $keys) {
                        if ($keys['TestType'] == 'Package') {
                           if ($keys['Type'] == 'Raw Material') {
                              $Name = $keys['Name'];
                              $TestID = $keys['TestID'];
                     ?>
                              <li class="lvl-2"><a href="<?php echo base_url(); ?>ProductDetails/test/<?php echo $TestID; ?>" class="site-nav lvl-2"><?php echo $Name; ?></a></li>
                     <?php
                           }
                        }
                     }
                     ?>

                     <!-- <li class="grid__item lvl-1 col-md-6 col-lg-6">
                                                <a href="#"><img src="assets/images/megamenu-bg1.jpg" alt="" title="" /></a>
                                            </li> -->
                  </ul>

               </li>




            </ul>
      </li>