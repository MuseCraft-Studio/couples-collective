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

function showCouplesForm() {
    var couplesForm = document.getElementById('google-form-couples');
    var individualForm = document.getElementById('google-form-individuals');
    individualForm.style.display = 'none';
    couplesForm.style.display = 'block';
}

function showIndividualsForm() {
    var couplesForm = document.getElementById('google-form-couples');
    var individualForm = document.getElementById('google-form-individuals');
    individualForm.style.display = 'block';
    couplesForm.style.display = 'none';
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
                image.src = data.picture;
                imageContainer.appendChild(image);

                // create text content div
                const textcontent = document.createElement('div');
                textcontent.classList = 'text-content';
                heading.appendChild(textcontent);

                // create title
                const title = document.createElement('a');
                title.className = 'title';
                title.href = data.link;
                title.innerText = data.name;
                textcontent.appendChild(title);

                // create position
                const position = document.createElement('div');
                position.className = 'position';
                position.innerText = data.position;
                textcontent.appendChild(position);

                // create services
                // const services = document.createElement('div');
                // services.className = 'services';
                // services.innerText = data.services;
                // textcontent.appendChild(services);

                // create blurb
                const blurb = document.createElement('div');
                blurb.className = 'blurb';
                blurb.innerText = data.blurb;
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

