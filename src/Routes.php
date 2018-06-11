<?php declare(strict_types=1);
return [
    [
        'GET',
        '/',
        'SocialNews\FrontPage\Presentation\FrontPageController#show'
    ],
    [
        'GET',
        '/submit',
        'SocialNews\Submission\Presentation\SubmissionController#show'
    ],
    [
        'POST',
        '/submit',
        'SocialNews\Submission\Presentation\SubmissionController#submit'
    ],
    [
        'GET',
        '/register',
        'SocialNews\User\Presentation\RegistrationController#show'
    ],
    [
        'POST',
        '/register',
        'SocialNews\User\Presentation\RegistrationController#register'
    ]
];