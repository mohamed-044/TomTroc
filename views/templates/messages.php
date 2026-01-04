<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Messagerie'; ?></title>
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body>
<?php include __DIR__ . '/header.php'; ?>
<section class="messages-section">
    <div class="messages-preview">
        <h1 class="title6">Messagerie</h1>
        <?php $isSendMessagePage = ($_GET['action'] ?? '') === 'sendMessage';
        $previewName = "Utilisateur";
        $previewAvatar = "alex_profile_image.png";
        $previewContent = "Aucun message";
        $previewTime = "00:00";
        if (isset($receiver) && $receiver !== null) {
            $previewName = $receiver->getName();
            $previewAvatar = $receiver->getImage();
            if (!empty($lastMessage)) {
                $previewContent = $lastMessage['content'];
                $previewTime = date('H:i', strtotime($lastMessage['created_at']));
            }
        }
        ?>
        <a href="index.php?action=sendMessage&id=<?= $receiverId ?>" class="open-message-card">
            <img src="./img/<?= htmlspecialchars($previewAvatar) ?>" alt="Avatar" id="message-avatar">
            <div class="new-messages">
                <div class="message-header">
                    <h2 class="message-sender"><?= htmlspecialchars($previewName) ?></h2>
                    <span class="message-sender"><?= $previewTime ?></span>
                </div>
                <p class="message-prewiew-text"><?= htmlspecialchars($previewContent) ?></p>
            </div>
        </a>
    </div>
     <?php if ($isSendMessagePage): ?>
    <div class="message-content">
        <?php if (isset($receiver)): ?>
        <div class="message-header-content">
            <img src="./img/<?= $receiver->getImage() ?>" alt="Avatar" id="message-avatar-large">
            <h2 class="message-sender-large"><?= $receiver->getName() ?></h2>
        </div>
        <?php endif; ?>
        <div class="message-body">
            <?php if (!empty($messages)): ?>
                <?php foreach ($messages as $msg): ?>
                    <?php if ($msg['sender_id'] == $_SESSION['user_id']): ?>
                        <div class="message container sent-message-container">
                            <span class="sent-message-time"><?= date('d.m H:i', strtotime($msg['created_at'])) ?></span>
                            <div class="message sent-message"><p class="message-text"><?= htmlspecialchars($msg['content']) ?></p></div>
                        </div>
                    <?php else: ?>
                        <div class="message-container received-message-container">
                            <img src="./img/<?= $receiver->getImage() ?>" alt="Avatar" class="received-message-avatar">
                            <span class="received-message-time"><?= date('d.m H:i', strtotime($msg['created_at'])) ?></span>
                            <div class="message received-message">
                                <p class="message-text"><?= htmlspecialchars($msg['content']) ?></p>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            <?php else: ?>
                <p class="no-messages">Aucun message pour le moment.</p>
            <?php endif; ?>
        </div>
        <form class="message-input-form" action="index.php?action=processSendMessage" method="post">
           <input type="hidden" name="receiver_id" value="<?= $receiverId ?>">
            <input type="text" id="message-input" name="content" placeholder="Tapez votre message ici" required>
            <button type="submit" class="cta-button7">Envoyer</button>
        </form>
    </div>
<?php endif; ?>
</section>
<?php include __DIR__ . '/footer.php'; ?>
</body>
</html>