<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?? 'Messagerie'; ?></title>
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body>
<?php include __DIR__ . '/header.php'; ?>

<section class="messages-section">
    <div class="messages-preview">
        <h1 class="title6">Messagerie</h1>
        <div class="open-message-card">
            <img src="./img<?php echo $senderAvatar ?? '/alex_profile_image.png'; ?>" alt="Account Image" id="message-avatar">
            <div class="new-messages">
            <div class="message-header">
            <h2 class="message-sender"><?php echo $senderName ?? 'Utilisateur'; ?></h2>
            <span class="message-sender"><?php echo $senderTime ?? '00:00'; ?></span>
            </div>
            <p class="message-prewiew-text"><?php echo $senderPreview ?? 'Aperçu du message'; ?></p>
            </div>
        </div>
        <div class="message-card">
            <img src="./img<?php echo $senderAvatar ?? '/alex_profile_image.png'; ?>" alt="Account Image" id="message-avatar">
            <div class="new-messages">
            <div class="message-header">
            <h2 class="message-sender"><?php echo $senderName ?? 'Utilisateur'; ?></h2>
            <span class="message-sender"><?php echo $senderTime ?? '00:00'; ?></span>
            </div>
            <p class="message-prewiew-text"><?php echo $senderPreview ?? 'Aperçu du message'; ?></p>
            </div>
        </div>
    </div>
<div class="message-content">
    <div class="message-header-content">
        <img src="./img<?php echo $receiverAvatar ?? '/alex_profile_image.png'; ?>" alt="Account Image" id="message-avatar-large">
        <h2 class="message-sender-large"><?php echo $senderName ?? 'Utilisateur'; ?></h2>
    </div>
    <div class="message-body">
        <div class="message container sent-message-container">
            <span class="sent-message-time"><?php echo $sentTime ?? '00:00 00:00'; ?></span>
            <div class="message sent-message">
                <p class="message-text"><?php echo $sentMessage ?? 'Message envoyé'; ?></p>
            </div>
        </div>
        <div class="message-container received-message-container">
            <img src="./img<?php echo $senderAvatar ?? '/alex_profile_image.png'; ?>" alt="Account Image" id="received-message-avatar">
            <span class="received-message-time"><?php echo $receivedTime ?? '00:00 00:00'; ?></span>
            <div class="message received-message">
                <p class="message-text"><?php echo $receivedMessage ?? 'Message reçu'; ?></p>
            </div>
        </div>
    </div>
    <form class="message-input-form" action="index.php?action=processSendMessage" method="post">
    <input type="hidden" name="receiver_id" value="<?= $receiverId ?>">
    <input type="text" id="message-input" name="content" placeholder="Tapez votre message ici" required>
    <button type="submit" class="cta-button7">Envoyer</button>
    </form>

</div>
</section>
<?php include __DIR__ . '/footer.php'; ?>
</body>
</html>