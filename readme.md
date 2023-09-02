# [The Couples Collective](https://bayareacouplescollective.com/)
## Designed by [Angel Damion Robles](https://www.linkedin.com/in/angel-damion/)
![Couples Collective Mockup](/screenshot.png)

### About
This is the first web development project by built by MuseCraft Studio - a website redesigned by [Angel Damion Robles](https://www.linkedin.com/in/angel-damion/) and developed by [CJ Garcia](https://www.linkedin.com/in/cj-l-garcia/) of MuseCraft Studio. The site is built as a WordPress theme and uses all custom HTML(PHP)/CSS/Javascript for appearance and functionality.

Angel built out the mocks using Figma, creating a design with three breakpoints: desktop, tablet, and mobile.

Two unique facets of this website are:
- The data on the "Meet our team" page as well as the FAQ are stored in a JSON file. The data is dynamically rendered on page load through the `fetch` javascript method. This is paired with the data-page attribute `<body data-page="page-name">` to determine which function should run on which page.
- This is the first WordPress site that MuseCraft Studio has built. Much was learned through the process and will likely be iterated on in either future developments in this site or future WordPress projects.

### Takeaways
Being the first wordpress site, I'd like to note the biggest takeaways from learning WordPress were:
- Understanding built-in WordPress PHP functions such as `<?php the_content() ?>` and what data was injected into the file.
- Finding the right way to build out file paths to assets that worked both on the localhost version and the published site i.e. the js functions had to use the theme path of `/wp-content/themes/couples-collective/assets/faq.json` while the image assets in the php files had to use `<?php echo get_stylesheet_directory_uri(); ?>/path/to/image.jpg"`
- Though not directly related to WordPress, we discovered near the end of the project that some - or most - of the CSS wasn't rendering on Firefox, older Safari, and some iPads as we had been designing and developing on Google Chrome for the majority of the time. Though I was troubleshooting a similar issue for a different project, I found this [CSS Validator](https://jigsaw.w3.org/css-validator/) and learned that nested CSS wasn't universally accepted on all browsers. This meant that the CSS had to be restructured from something like this:
    - ```
        #page-id {
            .class-name {
                color: var(--title-color);

                & a {
                    text-decoration: none;
                }
            }
        }
      ```
       to a de-nested version like this:

    - ```
        #page-id .class-name {
            color: var(--title-color);
        }

        #page-id .class-name a {
            text-decoration: none;
        }
      ```
      which, in isolation is fine, but at the end of the project when all of the CSS is nested, sometimes 5 layers deep, it became a surgical task.

### Acknowledgements
MuseCraft Studio would like to thank Angel for continual and transparent communication from beginning to end with this project. His expectations and goal setting were clear from the start and flexible when they needed to be. The design is also top of the line and eye catching, so if you're thinking of hiring a UX Designer, MuseCraft Studio endorses and recommends [Angel Damion Robles](https://www.linkedin.com/in/angel-damion/)

MuseCraft Studio would also like to thank our client [The Couples Collective](https://bayareacouplescollective.com/) for the trust it takes to allow us to build something for the first time. Their patience and understanding is a demonstration of the utmost professionalism and good will. Please give their site and their business a look, especially those living in the Bay Area.