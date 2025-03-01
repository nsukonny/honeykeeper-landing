<div class="modal-overlay" id="modal-overlay">
	<div class="modal">
		<div class="modal-inner">
			<button class="close-modal">
			<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
	<path
		d="M7.889 16.1111C8.11122 16.3333 8.33344 16.4444 8.66677 16.4444C9.00011 16.4444 9.22233 16.3333 9.44455 16.1111L12.0001 13.5555L14.5557 16.1111C14.7779 16.3333 15.1112 16.4444 15.3334 16.4444C15.5557 16.4444 15.889 16.3333 16.1112 16.1111C16.5557 15.6667 16.5557 15 16.1112 14.5555L13.5557 12L16.1112 9.44443C16.5557 8.99999 16.5557 8.33332 16.1112 7.88888C15.6668 7.44443 15.0001 7.44443 14.5557 7.88888L12.0001 10.4444L9.44455 7.88888C9.00011 7.44443 8.33344 7.44443 7.889 7.88888C7.44455 8.33332 7.44455 8.99999 7.889 9.44443L10.4446 12L7.889 14.5555C7.44455 15 7.44455 15.6667 7.889 16.1111Z"
		fill="#ADADAD" />
	<path
		d="M12 22C17.5556 22 22 17.5556 22 12C22 6.44444 17.5556 2 12 2C6.44444 2 2 6.44444 2 12C2 17.5556 6.44444 22 12 22ZM12 4.22222C16.3333 4.22222 19.7778 7.66667 19.7778 12C19.7778 16.3333 16.3333 19.7778 12 19.7778C7.66667 19.7778 4.22222 16.3333 4.22222 12C4.22222 7.66667 7.66667 4.22222 12 4.22222Z"
		fill="#ADADAD" />
</svg>
			</button>
			<div class="modal-title">
				Получить консультацию и специальное предложение
			</div>
			<form>
				<fieldset>
					<div class="input-wrapper">
						<input type="text" name="name" placeholder="Ваше имя" required>
						<div class="error">Вы ввели неверное имя</div>
					</div>
					<div class="input-wrapper">
						<input type="tel" id="phone-mask" name="phone" placeholder="+7 (___)___-__-__" pattern="^\+7\s\d{3}\s\d{3}\s\d{2}\s\d{2}$" required>
						<div class="error">Вы ввели неверный номер телефона</div>
					</div>
				</fieldset>
				@@include('../buttons/button-gradient/button-gradient.html', {'class': 'submit', 'text': 'Свяжитесь со мной'})
				<div class="form-response">Ваше сообщение отправлено!</div>
			</form>
			<p>
				Отправляя форму я даю своё согласие на <a href="#">сбор и обработку персональных данных</a> 
			</p>
		</div>
	</div>
</div>