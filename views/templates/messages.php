<?php include __DIR__ . '/header.php'; ?>

<section class="messages-section">
    <div class="messages-preview">
        <h1 class="title6">Messagerie</h1>
        <div class="open-message-card">
            <img src="/TomTroc/img/section_image.jpg" alt="Account Image" id="message-avatar">
            <div class="new-messages">
            <div class="message-header">
            <h2 class="message-sender">Alexlecture</h2>
            <span class="message-sender">15:43</span>
            </div>
            <p class="message-prewiew-text">Lorem ipsum dolor sit amet, consectetur .adipiscing elit, sed do eiusmod tempor </p>
            </div>
        </div>
        <div class="message-card">
            <img src="/TomTroc/img/section_image.jpg" alt="Account Image" id="message-avatar">
            <div class="new-messages">
            <div class="message-header">
            <h2 class="message-sender">Alexlecture</h2>
            <span class="message-sender">15:43</span>
            </div>
            <p class="message-prewiew-text">Lorem ipsum dolor sit amet, consectetur .adipiscing elit, sed do eiusmod tempor</p>
            </div>
        </div>
    </div>
<div class="message-content">
    <div class="message-header-content">
        <img src="/TomTroc/img/section_image.jpg" alt="Account Image" id="message-avatar-large">
        <h2 class="message-sender-large">Alexlecture</h2>
    </div>
    <div class="message-body">
        <div class="message container sent-message-container">
            <span class="sent-message-time">21.08 15:47</span>
            <div class="message sent-message">
                <p class="message-text">Lorem ipsum dolor sit amet, consectetur .adipiscing elit, sed do eiusmod tempor </p>
            </div>
        </div>
        <div class="message-container received-message-container">
            <img src="/TomTroc/img/section_image.jpg" alt="Account Image" id="received-message-avatar">
            <span class="received-message-time">21.08 15:50</span>
            <div class="message received-message">
                <p class="message-text">Lorem ipsum dolor sit amet, consectetur .adipiscing elit, sed do eiusmod tempor </p>
            </div>
        </div>
    </div>
    <form class="message-input-form" action="/TomTroc/index.php" method="post">
        <input type="text" id="message-input" name="message-input" placeholder="Tapez votre message ici" required>
        <button type="submit" class="cta-button7">Envoyer</button>
    </form>
</div>

</section>

<?php include __DIR__ . '/footer.php'; ?>