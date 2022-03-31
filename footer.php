    </div>
    <footer>
        <div class="footer">
            <img src="<?php $link = get_template_directory_uri(); echo($link."/assets/images/cardLogo.png")?>">
            <div class="socials">
                <a href="<?php echo fw_get_db_settings_option('youtubeLink'); ?>"><img src="<?php $link = get_template_directory_uri(); echo($link."/assets/images/icons/youtube.png")?>"></a>
                <a href="<?php echo fw_get_db_settings_option('discordLink'); ?>"><img src="<?php $link = get_template_directory_uri(); echo($link."/assets/images/icons/discord.png")?>"></a>
                <a href="<?php echo fw_get_db_settings_option('mediumLink'); ?>"><img src="<?php $link = get_template_directory_uri(); echo($link."/assets/images/icons/medium.png")?>" alt="Medium"></a>
                <a href="<?php echo fw_get_db_settings_option('tgLink'); ?>"><img src="<?php $link = get_template_directory_uri(); echo($link."/assets/images/icons/tg.png")?>" alt="Telegram"></a>
                <a href="<?php echo fw_get_db_settings_option('vkLink'); ?>"><img src="<?php $link = get_template_directory_uri(); echo($link."/assets/images/icons/vk.png")?>" alt="VK"></a>
            </div>
            <div class="contacts">
                <img src="<?php $link = get_template_directory_uri(); echo($link."/assets/images/icons/mail.png")?>">
                <p>gamefidealers@gmail.com</p>
            </div>
        </div>
    </footer>
    <script src="<?php $link = get_template_directory_uri(); echo($link."/assets/js/main.js")?>"></script>
</body>
</html>