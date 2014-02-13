<?php namespace Aamant\Mangopay;

class Errors
{
	/**
	 *
	 *	@param int $code
	 *	@return string
	 */
	public function message($code)
	{
		return \Lang::get('mangopay::errors.' . $this->raw($code));
	}

	/**
	 *
	 *	@param int $code
	 *	@return string
	 */
	public function raw($code)
	{
		switch ($code) {

			// MangoPay API error codes
			case "001999":
				return "Generic Operation error";
			case "001001":
				return "Unsufficient wallet balance";
			case "001002":
				return "Author is not the wallet owner";
			case "001011":
				return "Transaction amount is higher than maximum permitted amount";
			case "001012":
				return "Transaction amount is lower than minimum permitted amount";
			case "001021":
				return "Maximum amount reached for this wallet";
			case "011021":
				return "Maximum users reached for this wallet";
			case "001401":
				return "Transaction has already been successfully refunded";
			case "005403":
				return "The refund cannot exceed initial transaction amount";
			case "005404":
				return "The refunded fees cannot exceed initial fee amount";

			case "105101":
				return "Invalid card number";
			case "105102":
				return "Invalid cardholder name";
			case "105103":
				return "Invalid PIN code";
			case "105104":
				return "Invalid PIN format";
			case "105299":
				return "Token input Error";
			case "105202":
				return "Card number: invalid format";
			case "105203":
				return "Expiry date: missing or invalid format";
			case "105204":
				return "CVV: missing or invalid format";
			case "105205":
				return "Callback URL: Invalid format";
			case "105206":
				return "Registration data : Invalid format";
			case "101001":
				return "The user does not complete transaction";
			case "101002":
				return "The transaction has been cancelled by the user";
			case "101101":
				return "Transaction refused by the bank (Do not honor";
			case "101102":
				return "Transaction refused by the bank (Amount limit";
			case "101103":
				return "Transaction refused by the terminal";
			case "101104":
				return "Transaction refused by the bank (card limit reached)";
			case "101105":
				return "The card has expired";
			case "101106":
				return "The card is inactive";
			case "101111":
				return "Maximum number of attempts reached";
			case "101112":
				return "Maximum amount exceeded";
			case "101113":
				return "Maximum uses exceeded";
			case "101115":
				return "Debit limit exceeded";
			case "101116":
				return "Debit transaction frequency exceeded";
			case "101399":
				return "Secure mode: 3DSecure authentication is not available";
			case "101301":
				return "Secure mode: The 3DSecure authentication has failed";

			case "001599":
				return "Token processing error";
			case "101699":
				return "CardRegistration error";
			case "121001":
				return "Withdrawal refused";
			case "002999":
				return "Blocked due to the KYC limitation";
			case "008999":
				return "Fraud policy error";
			case "008001":
				return "Counterfeit Card";
			case "008002":
				return "Lost Card";
			case "008003":
				return "Stolen Card";
			case "008004":
				return "Card bin not authorized";
			case "008005":
				return "Security violation";
			case "008006":
				return "Fraud suspected by the bank";
			case "008007":
				return "Opposition on bank account (Temporary)";
			case "008500":
				return "Transaction blocked by Fraud Policy";
			case "008600":
				return "Wallet blocked by Fraud policy";
			case "008700":
				return "User blocked by Fraud policy";
			case "009199":
				return "PSP technical error";
			case "009499":
				return "Bank technical error";
			case "009999":
				return "Technical error";
			case "121001":
				return "Bank code blocked";
			case "121002":
				return "Used card not allowed";
			case "121003":
				return "Exceeding available limit";
			case "121004":
				return "Invalid card";
			case "121005":
				return "Invalid PIN";
			case "105101":
				return "Invalid card number";
			case "105102":
				return "Invalid cardholder name";
			case "105103":
				return "Invalid PIN code";
			case "105104":
				return "Invalid PIN format";
			case "105202":
				return "Card number: invalid format";
			case "105203":
				return "Expiry date: missing or invalid format";
			case "105204":
				return "CVV: missing or invalid format";
			case "105205":
				return "Callback URL: Invalid format";
			case "101001":
				return "The user does not complete transaction";
			case "101002":
				return "The transaction has been cancelled by the user";
			case "101101":
				return "Transaction refused by the bank (Do not honor)";
			case "101103":
				return "Transaction refused by the terminal";
			case "101104":
				return "Transaction refused by the bank";
			case "101105":
				return "The card has expired";
			case "101106":
				return "The card is inactive";
			case "101111":
				return "Maximum number of attempts reached";
			case "101112":
				return "Maximum amount exceeded";
			case "101113":
				return "Maximum uses exceeded";
			case "101115":
				return "The debit limit is exceeded";
			case "101116":
				return "The debit transaction frequency is exceeded";
			case "101399":
				return "Secure mode: 3DSecure authentication is not available";
			case "101301":
				return "Secure mode: The 3DSecure authentication has failed";
			case "001599":
				return "Token processing error";
			case "101699":
				return "CardRegistration error";
			case "008001":
				return "Counterfeit Card";
			case "008002":
				return "Lost Card";
			case "008003":
				return "Stolen Card";
			case "008004":
				return "Card bin not authorized";
			case "008005":
				return "Security violation";
			case "008006":
				return "Fraud suspected by the bank";
			case "008007":
				return "Opposition on bank account (Temporary)";
			case "008500":
				return "Transaction blocked by Fraud Policy";
			case "009199":
				return "PSP technical error";
			case "009499":
				return "Bank technical error";
			case "009999":
				return "Technical error";
			case "105202":
				return "Card number: invalid format";
			case "105203":
				return "Expiry date: missing or invalid format";
			case "105204":
				return "CVV: missing or invalid format";
			case "105205":
				return "Callback URL: Invalid forma";


			// PSP back error codes
			case "01100":
				return "Do not honor";
			case "01101":
				return "Card expired";
			case "01102":
				return "Invalid birthdate";
			case "01103":
				return "Contact your bank for authorization";
			case "01108":
				return "Contact your bank for special condition";
			case "01109":
				return "Invalid merchant";
			case "01110":
				return "Invalid amount";
			case "01111":
				return "Invalid card number";
			case "01113":
				return "Expenses not accepted";
			case "01114":
				return "This account does not exist";
			case "01115":
				return "This function does not exist";
			case "01116":
				return "Amount limit";
			case "01117":
				return "Invalid PIN code";
			case "01118":
				return "Card not registered";
			case "01119":
				return "This transaction is not authorized";
			case "01120":
				return "Transaction refused by terminal";
			case "01121":
				return "Debit limit exceeded";
			case "01122":
				return "Security violation";
			case "01123":
				return "Debit transaction frequency exceeded";
			case "01125":
				return "Carte inactive";
			case "01126":
				return "Invalid PIN format";
			case "01128":
				return "Invalid ctrl PIN key";
			case "01129":
				return "Carte contrefaite";
			case "01130":
				return "Invalid cvv2";
			case "01180":
				return "Invalid bank";
			case "01181":
				return "Invalid currency";
			case "01182":
				return "Invalid currency conversion";
			case "01183":
				return "Max amount exceeded";
			case "01184":
				return "Max uses exceeded";
			case "01185":
				return "Used order";
			case "01197":
				return "Communication error between MDA and SAA";
			case "01198":
				return "SAA configuration error";
			case "01199":
				return "GTM Internal Error";
			case "01200":
				return "Do not honor";
			case "01201":
				return "Card expired";
			case "01202":
				return "Suspicion de fraude";
			case "01206":
				return "Maximum nbr of attempts reached";
			case "01207":
				return "Special condition";
			case "01208":
				return "Carte perdue";
			case "01209":
				return "Carte volée";
			case "01280":
				return "Card bin not authorized";
			case "01401":
				return "Opposition on the account (temporary)";
			case "01402":
				return "Irregular cheque";
			case "01403":
				return "Non referenced cheque";
			case "01404":
				return "Wrong subscriber number (IDCF)";
			case "01405":
				return "FNCI Error server";
			case "01406":
				return "Incorrect CMC7";
			case "01407":
				return "Incorrect IDC number";
			case "01430":
				return "Incorrect cheque number";
			case "01902":
				return "Invalid transaction";
			case "01904":
				return "Bad format request";
			case "01907":
				return "Card provider server error";
			case "01909":
				return "Bank server Internal error";
			case "01912":
				return "Card provider server error";
			case "01913":
				return "Transaction already exist";
			case "01914":
				return "Transaction can not be found";
			case "01915":
				return "Transaction is refused";
			case "01917":
				return "This transaction is not resetable";
			case "01917":
				return "This transaction is not resetable";
			case "01940":
				return "Bank server unavailable";
			case "01941":
				return "Bank server communication error";
			case "01942":
				return "Bank server Internal error";
			case "01943":
				return "Bank server Internal error";


			// PSP front error codes
			case "02001":
				return "Duplicate transaction";
			case "02002":
				return "Duplicate pending transaction";
			case "02101":
				return "Internal Error";
			case "02102":
				return "External server communication error";
			case "02103":
				return "Connection timeout, please try later";
			case "02104":
				return "Tokenizer internal error";
			case "02110":
				return "The amount is invalid";
			case "02201":
				return "the seeked encryption key does not exist";
			case "02202":
				return "the used encryption key is out of date";
			case "02301":
				return "Transaction ID is invalid.";
			case "02302":
				return "Transaction is invalid.";
			case "02303":
				return "Invalid contract number.";
			case "02304":
				return "No transaction found for this token";
			case "02305":
				return "Invalid field format";
			case "02306":
				return "Le consommateur doit remplir les informations de paiement";
			case "02307":
				return "Invalid custom page code";
			case "02308":
				return "Invalid value for";
			case "02309":
				return "CustomPaymentPageCode is inactive";
			case "02310":
				return "No transaction matching with search criteria";
			case "02311":
				return "Too many transactions match with search criteria";
			case "02312":
				return "Search criteria are invalid";
			case "02313":
				return "Transaction flag capturable is disabled";
			case "02314":
				return "Transaction flag refundable is disabled";
			case "02315":
				return "A merchant is already logged on with this company name. If there is a problem, contact Support";
			case "02316":
				return "The commercial offer does not exist for this distributor. If there is a problem, contact Support";
			case "02317":
				return "This token does not exist";
			case "02318":
				return "This token does not exist, please check your primary/secondary endpoints";
			case "02319":
				return "Payment cancelled by the buyer";
			case "02320":
				return "The searched time interval is too long";
			case "02321":
				return "Invalid value for payment action";
			case "02322":
				return "Invalid cardholder name";
			case "02323":
				return "Birthdate must not be provided using 3DS";
			case "02401":
				return "Some transaction failed";
			case "02402":
				return "Waiting for treatment";
			case "02403":
				return "No mass treatment found";
			case "02502":
				return "Wallet with the same identifier exist";
			case "02503":
				return "Wallet does not exist";
			case "02504":
				return "Can not update Lastname and Firstname";
			case "02505":
				return "Wallet is disabled";
			case "02506":
				return "Wallet can not operate on scheduled date";
			case "02507":
				return "Can not find payment record";
			case "02508":
				return "Payment record is disabled";
			case "02509":
				return "payment.amount must equals recurring.firstAmount + (recurring.billingLeft – 1) * recurring.amount";
			case "02510":
				return "Can not find payment record";
			case "02511":
				return "Wallet is not supported for this card";
			case "02512":
				return "Lastname and Firstname required for wallet";
			case "02513":
				return "Wallet Id required for wallet";
			case "02514":
				return "Private data number is limited to 99";
			case "02515":
				return "Must choose the data to update";
			case "02516":
				return "Can not disable the wallet(s)";
			case "02517":
				return "Can not disable some wallet(s)";
			case "02518":
				return "Invalid card index";
			case "02519":
				return "Can not enable the wallet(s)";
			case "02520":
				return "Can not enable some wallet(s)";
			case "02521":
				return "Card already exist in this wallet";
			case "02522":
				return "Amex recurring invalid field";
			case "02523":
				return "Amex recurring not allowed";
			case "02524":
				return "Amex one click invalid field";
			case "02525":
				return "Amex one click not allowed";
			case "02526":
				return "Amex one click capture amount invalid";
			case "02527":
				return "Invalid control option";
			case "02528":
				return "SelectedContractList must be filled with only one contract";
			case "02529":
				return "Informations must referenced the same contract";
			case "02530":
				return "eMoneo not allowed";
			case "02531":
				return "Leetchi not allowed";
			case "02532":
				return "Wallet management is not allowed with your account";
			case "02533":
				return "Consommateur non redirigé sur les pages de paiement";
			case "02534":
				return "Consommateur non redirigé sur les pages de paiement et session expirée";
			case "02535":
				return "La session a expiré avant opération sur le portefeuille";
			case "02536":
				return "Le consommateur a annulé l’opération";
			case "02538":
				return "Fullfill either card.number or card.token (not both)";
			case "02539":
				return "Expiration date is mandatory for this token format.";
			case "02540":
				return "No card found for this token.";
			case "02541":
				return "Card is not eligible";
			case "02600":
				return "Reset is not supported for transaction type";
			case "02601":
				return "Reset already done";
			case "02602":
				return "Authorization is already expired";
			case "02603":
				return "Authorization is not resetable";
			case "02604":
				return "This transaction does not exist";
			case "02605":
				return "Invalid Functional Profile ID";
			case "02606":
				return "Invalid Sequence ID";
			case "02607":
				return "Invalid Monetic Profil ID";
			case "02608":
				return "Invalid Monetic Param ID";
			case "02609":
				return "Monetics parameters are not initialized";
			case "02610":
				return "The max amount is exceeded";
			case "02611":
				return "The min amount is not reached";
			case "02612":
				return "The amount provided is different from the original transaction";
			case "02613":
				return "The maximal sum of the capture/refund is exceeded";
			case "02614":
				return "Invalid Luhn Key";
			case "02615":
				return "Virtual card denied";
			case "02616":
				return "Error while creating the wallet";
			case "02617":
				return "The transaction is already captured";
			case "02618":
				return "The transaction is not yet captured";
			case "02619":
				return "You don’t have the reauthorization option";
			case "02620":
				return "Currency must be the same as the original authorization";
			case "02621":
				return "Operation not allowed on this site";
			case "02622":
				return "Reauthorization not allowed on virtual card";
			case "02622":
				return "Reauthorization not allowed on virtual card";
			case "02623":
				return "The maximum number of attempts is reached";
			case "02624":
				return "Card expired";
			case "02625":
				return "Invalid cart number format";

			// 3Dsecure error codes
			case "03001":
				return "Not enrolled";
			case "03002":
				return "Not participating";
			case "03003":
				return "Authentication failed";
			case "03004":
				return "Can not find verifyEnrollment call";
			case "03005":
				return "Transaction already exists";
			case "03006":
				return "Invalid PARES";
			case "03021":
				return "Enrollment verification failed";
			case "03022":
				return "Authentication verification failed";
 
			// Access Error codes
			// Access error
			case "09101":
				return "Username/Password is incorrect";
			case "09102":
				return "Account is locked or inactive";
			case "09104":
				return "Client certificate is disabled";
			case "09201":
				return "You do not have permissions to make this API call";
			default:
				return "error";
		}
	}
}