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

        <?php if (empty($conversations)): ?>
            <p class="no-messages">Aucune conversation pour le moment.</p>
        <?php else: ?>
            <?php foreach ($conversations as $index => $conv): ?>
                <?php 
                $user = $conv['user']; 
                $last = $conv['lastMessage'];

                $isActive = (isset($_GET['id']) && $_GET['id'] == $conv['partner']);

                $cardClass = $isActive ? "open-message-card" : "message-card";
                ?>
                <a href="index.php?action=sendMessage&id=<?= $conv['partner'] ?>" class="<?= $cardClass ?>">
                <img src="./img/<?= htmlspecialchars($user->getImage()) ?>" alt="Avatar" id="message-avatar">
                <div class="new-messages">
                    <div class="message-header">
                        <h2 class="message-sender"><?= htmlspecialchars($user->getName()) ?></h2>
                        <span class="message-sender"> <?= $last ? date('H:i', strtotime($last['created_at'])) : '' ?></span>
                    </div>
                    <p class="message-prewiew-text"><?= $last ? htmlspecialchars($last['content']) : '' ?></p>
                </div>
                </a>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
    <div class="message-content">
        <?php if (isset($receiver)): ?>
            <div class="message-header-content">
                <img src="./img/<?= $receiver->getImage() ?>" alt="Avatar" id="message-avatar-large">
                <a href="index.php?action=profile&id=<?= $receiver->getId(); ?>" class="message-sender-large"> <?= $receiver->getName() ?></a>
            </div>
        <?php endif; ?>
        <div class="message-body">
            <?php if (!empty($messages)): ?>
                <?php foreach ($messages as $msg): ?>
                    <?php if ($msg['sender_id'] == $_SESSION['user_id']): ?>
                        <div class="message container sent-message-container">
                            <span class="sent-message-time"> <?= date('d.m H:i', strtotime($msg['created_at'])) ?></span>
                            <div class="message sent-message">
                                <p class="message-text"><?= htmlspecialchars($msg['content']) ?></p>
                            </div>
                        </div>
                    <?php else: ?>
                        <div class="message-container received-message-container">
                            <img src="./img/<?= $receiver->getImage() ?>" alt="Avatar" class="received-message-avatar">
                            <span class="received-message-time"> <?= date('d.m H:i', strtotime($msg['created_at'])) ?></span>
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
        <?php if (isset($receiver)): ?>
            <form class="message-input-form" action="index.php?action=processSendMessage" method="post">
                <input type="hidden" name="receiver_id" value="<?= $receiverId ?>">
                <input type="text" id="message-input" name="content" placeholder="Tapez votre message ici" required>
                <button type="submit" class="cta-button7">Envoyer</button>
            </form>
        <?php endif; ?>
    </div>
</section>
<?php include __DIR__ . '/footer.php'; ?>
</body>
</html>
