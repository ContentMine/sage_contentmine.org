**Form to contact us.**

## Form
```
<div id="contact-form">
<div class="col-md-8">
<h4>Subject</h4>
    [text subject] 
<h4>How can we help? </h4>
    [textarea message]
</div>

<div class="col-md-4">
<h4>Your Email (required)</h4>
    [email* your-email]
<h4>Reason</h4>
[select* menu-87 "Question about ContentMine" "Report a problem with the website" "Request a new website feature" "Media inquiry" "Other"]
<p>[submit "Send" class:btn class:btn-primary class:btn-large]</p>
</div>
</div>
```

## Message body
```
From: [your-name] <[your-email]>
Subject: [your-subject]

Message Body:
[your-message]

--
This e-mail was sent from the contact form on ContentMine.org
```

## Settings
- To: ContentMine <@.>
- From: ContentMine <@.>
- Subject: [your-subject]
- Additional headers: -> Reply-To: [your-email]

