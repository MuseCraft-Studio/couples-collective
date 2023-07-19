<!DOCTYPE html>
<html lang="en">

<head>
    <title>Couples Collective - Meet Our Team</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Meet Our Team">
    <?php 
    wp_head();
    ?>
</head>

<body data-page="team">
    <section id="media-level"></section>
<?php
    get_header()
?>
    <div id="team-one">
        <div class="wrapper">
            <div class="circle-container">
                <div class="first-column">
                    <div class="circle-one"></div>
                    <div class="circle-two"></div>
                </div>
                <div class="second-column">
                    <div class="circle-three"></div>
                </div>
            </div>
            <div class="team-header">
                <div class="title">
                    Find the right match for you
                </div>
                <p>Our counselors offer a variety of expertise, whether you’re looking for yourself or you and your
                    partner, we can find the right match for you.</p>
            </div>
            <div id="people">
            </div>
        </div>
    </div>
    <div id="team-two">
        <div class="container">
            <div>
                <img src="/assets/Stocksy_txp2c7f6af1x1k200_Small_577140.jpg" />
            </div>
            <div>
                <div class="title">Send us a message now and we can find the right match for you</div>
                <form>
                    <div class="form-row">
                        <label for="text-input1">Name</label>
                        <input type="text" id="text-input1" name="text-input1">
                    </div>

                    <div class="form-row">
                        <label for="text-input2">Email</label>
                        <input type="text" id="text-input2" name="text-input2">
                    </div>

                    <div class="double-row">
                        <div class="form-row">
                            <label for="number-input">Phone</label>
                            <input type="number" id="number-input" name="number-input">
                        </div>
                        <div class="form-row">
                            <label for="time-input">Best time to reach you</label>
                            <div class="time-row">
                                <input type="time" id="time-input" name="time-input">
                                <select id="time-zone-dropdown" name="time-zone-dropdown">
                                    <option value="pst">PST</option>
                                    <option value="mst">MST</option>
                                    <option value="cst">CST</option>
                                    <option value="est">EST</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="double-row">
                        <div class="form-row">
                            <label for="subject-input">Subject</label>
                            <input type="text" id="subject-input" name="subject-input">
                        </div>
                        <div class="form-row">
                            <label for="comm-pref-dropdown">Preferred contact</label>
                            <select id="comm-pref-dropdown" name="comm-pref-dropdown">
                                <option value="" disabled selected>Phone or email</option>
                                <option value="phone">Phone</option>
                                <option value="email">Email</option>
                            </select>

                        </div>
                    </div>
                    <div class="form-row">
                        <label for="textarea-input">Message</label>
                        <textarea id="textarea-input" name="textarea-input" rows="10"></textarea>
                    </div>
                    <div>
                        <button type="submit" class="fill-button">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div id="team-three">
        <div class="call-now">Or call now (510) 373-9995</div>
    </div>
    <div id="footer">
        <div class="container">
            <div class="flex-item about">
                <div class="title">The Couples Collective</div>
                <div class="description">
                    <p>
                        Using emotionally focused couples therapy to build stronger bonds with your loved one. We work
                        with
                        couples and individuals to support their growth and life goals by matching you with the right
                        therapist.
                    </p>
                    <p>
                        The Couples Collective was started in the San Francisco Bay Area and now services more couples
                        across California remotely.
                    </p>
                </div>
                <button class="footer-outline-button">Call now (510) 373-9995</button>
                <button class="footer-fill-button">Schedule a free consultation</button>
            </div>
            <div class="flex-item">
                <div class="title">Navigation</div>
                <div class="nav-list">
                    <div class="nav-link">
                        <a href="home.html">
                            Home
                        </a>
                    </div>
                    <div class="nav-link">
                        <a href="home.html">
                            Couples therapy
                        </a>
                    </div>
                    <div class="nav-link">
                        <a href="home.html">
                            Individual counseling
                        </a>
                    </div>
                    <div class="nav-link">
                        <a href="home.html">
                            Meet our team
                        </a>
                    </div>
                    <div class="nav-link">
                        <a href="home.html">
                            What we do
                        </a>
                    </div>
                    <div class="nav-link">
                        <a href="home.html">
                            FAQ
                        </a>
                    </div>
                    <div class="nav-link">
                        <a href="home.html">
                            Blog
                        </a>
                    </div>
                </div>

            </div>
            <div class="flex-item">
                <div class="title">Stay connected</div>
                <div class="logo-links">
                    <div>
                        <img src="/assets/footer-facebook.svg" />
                    </div>
                    <div>
                        <img src="/assets/footer-linkedin.svg" />
                    </div>
                    <div>
                        <img src="/assets/footer-yelp.svg" />
                    </div>
                </div>
            </div>
            <div class="flex-item">
                <form action="javascript:" onsubmit="signup()" class="sign-up">
                    <div class="title">Sign up for our newsletter</div>
                    <div class="description">
                        <p>
                            Want to know when we get a new blog post or release new resources that can help you grow at
                            home? Sign up below!
                        </p>
                    </div>
                    <input #bloop class="input" type="email" placeholder="Email address" name="mail" required>
                    <div>
                        <input type="submit" class="footer-fill-button" value="Subscribe">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>