function onReady() {
    const currentPage = document.body.dataset.page;
    if (currentPage === 'home') {
        var header = document.getElementById("navigation");
        header.style.position = 'absolute';
    }
    if (currentPage === 'team') {
        fetchTeamData();
    } else if (currentPage === 'faq') {
        fetchFAQData();
    }
}

if (document.readyState !== "loading") {
    onReady();
} else {
    document.addEventListener("DOMContentLoaded", onReady);
}

function responsiveNav() {
    var x = document.getElementById("myLinks");
    var icon = document.getElementById("menu-icon");
    if (x.style.transform === "translateX(0%)") {
        x.style.transform = "translateX(100%)";
        x.style.transition = "all 0.5s ease";
        icon.classList.remove("fa-x");
        icon.classList.add("fa-bars");
        icon.style.color = "#1b1c1e";
        icon.style.transition = "all 0.25s ease";
    } else {
        x.style.transform = "translateX(0%)";
        x.style.transition = "all 0.5s ease";
        icon.classList.remove("fa-bars");
        icon.classList.add("fa-x");
        icon.style.color = "white";
        icon.style.transition = "all 0.25s ease";
    }
}

function fetchTeamData() {
    fetch('/wp-content/themes/couples-collective/assets/team_info.json')
        .then(response => response.json())
        .then(file => {
            const people = document.getElementById('people');
            file.forEach(data => {
                // create container
                const container = document.createElement('div');
                container.className = "people-container";
                people.appendChild(container);

                // create heading
                const heading = document.createElement('div');
                heading.className = 'people-heading';
                container.appendChild(heading);

                // create image
                const imageContainer = document.createElement('div');
                imageContainer.className = 'profile-container';
                heading.appendChild(imageContainer);

                const image = document.createElement('img');
                if (data.picture) {
                    image.src = data.picture;
                } else {
                    image.src = "\\wp-content\\themes\\couples-collective\\assets\\team\\picture_blank.jpg";
                }
                imageContainer.appendChild(image);

                // create text content div
                const textcontent = document.createElement('a');
                textcontent.classList = 'text-content';
                if (data.link) {
                    textcontent.href = data.link;
                } else {
                    textcontent.href = "https://bayareacouplescollective.com/404";
                }
                heading.appendChild(textcontent);

                // create title
                const title = document.createElement('div');
                title.className = 'title';
                if (data.name) {
                    title.innerText = data.name;
                } else {
                    title.innerText = "Firstname Lastname";
                }
                textcontent.appendChild(title);

                // create pronouns
                const pronouns = document.createElement('div');
                pronouns.className = 'pronouns';
                if (data.pronouns) {
                    pronouns.innerText = data.pronouns;
                } else {
                    pronouns.innerText = "";
                }
                textcontent.appendChild(pronouns);

                // create position
                const position = document.createElement('div');
                position.className = 'position';
                if (data.position) {
                    position.innerText = data.position;
                } else {
                    position.innerText = "";
                }
                textcontent.appendChild(position);

                // create blurb
                const blurb = document.createElement('div');
                blurb.className = 'blurb';
                if (data.blurb) {
                    blurb.innerText = data.blurb;
                } else {
                    blurb.innerText = "";
                }
                container.appendChild(blurb);
            });
        })
        .catch(error => {
            console.error('Error loading the team data:', error);
        });
}

function toggleContent() {
    var content = document.querySelector('.content');

    if (content.style.maxHeight) {
        content.style.maxHeight = null;
    } else {
        content.style.maxHeight = content.scrollHeight + 'px';
    }
}

function fetchFAQData() {
    fetch('/wp-content/themes/couples-collective/assets/faq.json')
        .then(response => response.json())
        .then(file => {
            const faq = document.querySelector('.sections');
            file.forEach(data => {
                const section = document.createElement('div');
                section.classList.add('qa-container');

                const question = document.createElement('div');
                question.classList.add('question');
                question.innerText = data.q;
                section.appendChild(question);

                const answer = document.createElement('div');
                answer.classList.add('answer');
                answer.innerText = data.a;

                const elip = document.createElement('span');
                elip.innerText = " (more...)";
                elip.id = "expand";
                answer.appendChild(elip);

                // const showMore = document.createElement('span');
                // showMore.style.display = "inline-block";
                // const arrow = document.createElement('i');
                // arrow.classList.add("fa-solid", "fa-chevron-down")
                // showMore.appendChild(arrow)
                // answer.appendChild(showMore)
                section.appendChild(answer);


                const more = document.createElement('div');
                more.classList.add('more');
                more.innerText = data.more;
                section.appendChild(more);

                faq.appendChild(section);

                // Add click event to each section
                elip.addEventListener('click', () => {
                    const content = section.querySelector('.more');
                    content.style.maxHeight = content.style.maxHeight ? null : content.scrollHeight + 'px';
                    const expand = section.querySelector('#expand');
                    const innerText = expand.innerText
                    expand.innerText = innerText == ' (more...)' ? ' (less...)' : ' (more...)';
                });
            });
        })
        .catch(error => {
            console.error('Error loading the faq data:', error);
        });
}

