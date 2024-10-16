
<?php
	$url_host = $_SERVER['HTTP_HOST'];

	$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

	$pattern_uri = '/' . $pattern_document_root . '(.*)$/' ;

	preg_match_all($pattern_uri, __DIR__, $matches);

	$url_path = $url_host . $matches[1][0];

	$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-3013">
    <section class="team-section">
        <div class="team-header">
            <h1>Team</h1>
            <h2>Our Dedicated Team of Phone Repair Professionals</h2>
        </div>

        <div class="team-content">
            <div class="team-image1">
                <img src="https://shine.creativemox.com/mobicare/wp-content/uploads/sites/32/2024/10/portrait-of-a-happy-man-with-smart-phone-and-laptop-indoors--1536x1024.jpg" alt="Phone Repair Team" style="width: 600px;">
            </div>
			<div class="team-image2">
                <img src="https://shine.creativemox.com/mobicare/wp-content/uploads/sites/32/2024/10/close-up-shot-of-smart-phone-and-tablet-repair-in-a-technology-lab--1536x1024.jpg" alt="Phone Repair Team" style="width: 300px;">
            </div>

            <div class="team-info">
                <h3>OUR TEAM</h3>
                <h4>If you want to lift yourself up, lift up someone else.</h4>
                <p>
                    Aliquam pellentesque quam aenean bibendum mollis per. Duis non rhoncus vulputate maximus enim ornare.
                    Diam eu id rutrum lobortis netus neque integer venenatis lectus libero a.
                </p>
                
                <div class="features">
                    <div class="feature-item">
                        <div class="icon-container">
                            <i aria-hidden="true" class="fas fa-tachometer-alt"></i>
                        </div>
                        <div class="text-container">
                            <p><strong>Fast Turnaround Time</strong><br>In sociosqu tristique consectetur potenti lectus si morbi porta magnis.</p>
                        </div>
                    </div>

                    <div class="feature-item">
                        <div class="icon-container">
                            <i aria-hidden="true" class="fas fa-umbrella"></i>
                        </div>
                        <div class="text-container">
                            <p><strong>Comprehensive Warranty</strong><br>In sociosqu tristique consectetur potenti lectus si morbi porta magnis.</p>
                        </div>
                    </div>
                </div>

				<hr>

				<div class="team-members">
                    <div class="member-images">
                        <img src="https://shine.creativemox.com/mobicare/wp-content/uploads/sites/32/2024/10/1.jpg" alt="Person 1">
                        <img src="https://shine.creativemox.com/mobicare/wp-content/uploads/sites/32/2024/10/7.jpg" alt="Person 2">
                        <img src="https://shine.creativemox.com/mobicare/wp-content/uploads/sites/32/2024/10/5.jpg" alt="Person 3">
                        <img src="https://shine.creativemox.com/mobicare/wp-content/uploads/sites/32/2024/10/13.jpg" alt="Person 4">
                    </div>
                    <p><strong>More than 1500+</strong><br> People join our team</p>
                </div>
            </div>
        </div>
    </section>
</div>
