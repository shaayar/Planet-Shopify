<?php
session_start();
?>
<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Admin Panel</title>
        <link rel="icon" href="./images/admin.png">
        <link rel="stylesheet" href="./style.css">
        <link rel="stylesheet" href="./resp.css">
    </head>

    <body>

        <?php include './headerNav.php' ?>
        
            <div class="main">
                <div class="searchbar2">
                    <input type="text" name="search" id="" placeholder="Search">
                    <div class="searchbtn">
                        <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210180758/Untitled-design-(28).png"
                            class="icn srchicn" alt="search-button">
                    </div>
                </div>

                <div class="box-container">
                    <div class="box box1">
                        <div class="text">
                            <h2 class="topic-heading">60.5k</h2>
                            <h2 class="topic">Article Views</h2>
                        </div>

                        <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210184645/Untitled-design-(31).png"
                            alt="Orders">
                    </div>

                    <div class="box box2">
                        <div class="text">
                            <h2 class="topic-heading">150</h2>
                            <h2 class="topic">Likes</h2>
                        </div>

                        <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210185030/14.png" alt="likes">
                    </div>

                    <div class="box box3">
                        <div class="text">
                            <h2 class="topic-heading">320</h2>
                            <h2 class="topic">Comments</h2>
                        </div>

                        <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210184645/Untitled-design-(32).png"
                            alt="comments">
                    </div>

                    <div class="box box4">
                        <div class="text">
                            <h2 class="topic-heading">70</h2>
                            <h2 class="topic">Published</h2>
                        </div>

                        <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210185029/13.png"
                            alt="published">
                    </div>
                </div>

                <div class="report-container">
                    <div class="report-header">
                        <h1 class="recent-Articles">Recent Articles</h1>
                        <button class="view">View All</button>
                    </div>

                    <div class="report-body">
                        <div class="report-topic-heading">
                            <h3 class="t-op">Article</h3>
                            <h3 class="t-op">Views</h3>
                            <h3 class="t-op">Comments</h3>
                            <h3 class="t-op">Status</h3>
                        </div>

                        <div class="items">
                            <div class="item1">
                                <h3 class="t-op-nextlvl">Article 73</h3>
                                <h3 class="t-op-nextlvl">2.9k</h3>
                                <h3 class="t-op-nextlvl">210</h3>
                                <h3 class="t-op-nextlvl label-tag">Published</h3>
                            </div>

                            <div class="item1">
                                <h3 class="t-op-nextlvl">Article 72</h3>
                                <h3 class="t-op-nextlvl">1.5k</h3>
                                <h3 class="t-op-nextlvl">360</h3>
                                <h3 class="t-op-nextlvl label-tag">Published</h3>
                            </div>

                            <div class="item1">
                                <h3 class="t-op-nextlvl">Article 71</h3>
                                <h3 class="t-op-nextlvl">1.1k</h3>
                                <h3 class="t-op-nextlvl">150</h3>
                                <h3 class="t-op-nextlvl label-tag">Published</h3>
                            </div>

                            <div class="item1">
                                <h3 class="t-op-nextlvl">Article 70</h3>
                                <h3 class="t-op-nextlvl">1.2k</h3>
                                <h3 class="t-op-nextlvl">420</h3>
                                <h3 class="t-op-nextlvl label-tag">Published</h3>
                            </div>

                            <div class="item1">
                                <h3 class="t-op-nextlvl">Article 69</h3>
                                <h3 class="t-op-nextlvl">2.6k</h3>
                                <h3 class="t-op-nextlvl">190</h3>
                                <h3 class="t-op-nextlvl label-tag">Published</h3>
                            </div>

                            <div class="item1">
                                <h3 class="t-op-nextlvl">Article 68</h3>
                                <h3 class="t-op-nextlvl">1.9k</h3>
                                <h3 class="t-op-nextlvl">390</h3>
                                <h3 class="t-op-nextlvl label-tag">Published</h3>
                            </div>

                            <div class="item1">
                                <h3 class="t-op-nextlvl">Article 67</h3>
                                <h3 class="t-op-nextlvl">1.2k</h3>
                                <h3 class="t-op-nextlvl">580</h3>
                                <h3 class="t-op-nextlvl label-tag">Published</h3>
                            </div>

                            <div class="item1">
                                <h3 class="t-op-nextlvl">Article 66</h3>
                                <h3 class="t-op-nextlvl">3.6k</h3>
                                <h3 class="t-op-nextlvl">160</h3>
                                <h3 class="t-op-nextlvl label-tag">Published</h3>
                            </div>

                            <div class="item1">
                                <h3 class="t-op-nextlvl">Article 65</h3>
                                <h3 class="t-op-nextlvl">1.3k</h3>
                                <h3 class="t-op-nextlvl">220</h3>
                                <h3 class="t-op-nextlvl label-tag">Published</h3>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="./index.js"></script>
    </body>

    </html>