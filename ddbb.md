ddbb:
DROP DATABASE IF EXISTS laravel;

INSERT INTO notes (title, text)
VALUES ('Titulo de la Nota', 'Texto de la Nota');

# mailtrap
MAIL_MAILER=smtp
MAIL_HOST=sandbox.smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=aa8ba62a9ef197
MAIL_PASSWORD=6ea612a8eaa898

# MAIL_MAILER=smtp
# MAIL_HOST=mailpit
# MAIL_PORT=1025
# MAIL_USERNAME=null
# MAIL_PASSWORD=null