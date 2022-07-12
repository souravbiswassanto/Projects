#include"All_Headers.h"
using namespace std;

#define BKSP 8
string playerName;
string Amount;

int amount;
const int MAX_TRIES=6;

void stoint(string a)
{
    stringstream geek(a);
    amount=0;
    geek>>amount;
}

bool check_string(string Amount){
    int check=0;
    for (int i=0;i<Amount.size();i++){
        if (Amount[i]>57||Amount[i]<48){
            check=1;
            break;
        }
    }

    if (check==0){
        return true;
    }
    else {
        return false;
    }

}

int STOI(string a)
{
    stringstream geek(a);
    int value=0;
    geek>>value;

    return value;
}


void Games::name_money(){
    print a;
    Games b;

    cout<<"\t\t\t\t";
    a.drawLine_H (50,'-');
    cout<<"\t\t\t\t";
    a.drawLine_H (50,'=');
    cout<<"\t\t\t\t";
    a.drawLine_H (50,'-');
    cout << "\n\n\t\t\t\t\t\t  CASINO GAME\n\n\n\t\t\t\t";
    a.drawLine_H(50,'-');
    cout<<"\t\t\t\t";
    a.drawLine_H (50,'=');
    cout<<"\t\t\t\t";
    a.drawLine_H (50,'-');

    cout << "\n\n\t\t\t\t\tEnter Your Name : ";
    cin.ignore();
    getline(cin, playerName);

    cout << "\n\t\t\t\t\tDeposit Amount : $";

    cin>>Amount;
    int check=0;
    for (int i=0;i<Amount.size();i++){
        if (Amount[i]>57||Amount[i]<48){
            check=1;
        }
    }

    if (check==0){
        stoint(Amount);
    }
    else {
        system("cls");
        cout<<"\t\t\t\tPlease Enter A Valid Amount!!"<<endl;
        b.name_money();
    }

    b.edit_name_money();

}


void Games::name_money_2(){

    print a;
    Games b;

    cout<<"\t\t\t\t";
    a.drawLine_H (50,'-');
    cout<<"\t\t\t\t";
    a.drawLine_H (50,'=');
    cout<<"\t\t\t\t";
    a.drawLine_H (50,'-');
    cout << "\n\n\t\t\t\t\t\t  CASINO GAME\n\n\n\t\t\t\t";
    a.drawLine_H(50,'-');
    cout<<"\t\t\t\t";
    a.drawLine_H (50,'=');
    cout<<"\t\t\t\t";
    a.drawLine_H (50,'-');

    cout << "\n\n\t\t\t\t\tYour Name : "<<playerName;
    cout << "\n\t\t\t\t\tDeposit Amount : $"<<amount;

    b.edit_name_money();

}


void Games::edit_name_money(){
    print a;
    Games b;
    string options;
    cout<<"\n\t\t\t\t\tName And Money Successfully Added!!";
    cout<<"\n\n\t\t\t\t\t1.Edit Name And Money\n";
    cout<<"\t\t\t\t\t2.Menu\n";
    cout<<"\t\t\t\t\t3.No I Am Afraid!!I'm Coward!!\n";
    cout<<"\n\n\t\t\t\tSelect Your Options :";
    cin>>options;
    if (options=="1"){
        system("cls");
        b.name_money();
    }
    else if (options=="2"){
        system("cls");
        a.game();
    }
    else if (options=="3"){
        a.end_project();
    }
    else {
        system("cls");
        cout<<"\t\t\t\tWRONG KEYWORD"<<endl;
        b.name_money_2();
    }

}


void Games::rules()
{
    print a;
    system("cls");
    cout << "\n\n\t\t";
    a.drawLine_H(80,'-');
    cout << "\t\t\t\t\t   RULES & INSTRUCTIONS OF THE GAME\n\t\t";
    a.drawLine_H(80,'-');
    cout << "\t\t\t1. Guess A Country Name By Yourself\n";
    cout << "\t\t\t2. Each Letter Is Represented By A Star.\n";
    cout << "\t\t\t3. You Have To Type Only One Letter In One Try\n";
    cout << "\t\t\t4. If u Win Then U Will Receive 2 Times Of Betting Amount\n";
    cout << "\t\t\t5. You Have " << MAX_TRIES << " Tries To Try And Guess The Word.\n\n\t\t";
    a.drawLine_H(80,'-');

}


void Games::Number_Guessing_Game (){

    print a;
    Games b;
    int bettingAmount;
    int guess;
    int dice;
    string Guess;
    string Dice;
    string BettingAmount;
    string choice;

    srand(time(0));

    do
    {
        system("cls");
        a.rules();
        cout << "\n\n\t\tYour current balance is $ " << amount << "\n";

        do
        {
            cout <<"\t\tPlease enter money to bet : $";
            cin >> BettingAmount;
            if (check_string(BettingAmount)==true){
                bettingAmount=STOI(BettingAmount);
            }
            else {

                b.Number_Guessing_Game();
            }
            if(bettingAmount > amount)
                cout << "\t\tYour betting amount is more than your current balance\n"
                       <<"\n\t\tRe-enter data\n ";
        }while(bettingAmount > amount);

        do
        {
            loop1:
            cout << "\t\tGuess your number to bet between 1 to 7 :";
            cin >> Guess;

            if (check_string(Guess)==true){
                guess=STOI(Guess);
            }
            else goto loop1;

            if(guess <= 0 || guess > 7)
                cout << "\t\tPlease check the number!! should be between 1 to 5\n"
                    <<"\n\t\tRe-enter data\n ";
        }while(guess <= 0 || guess > 7);

        dice = rand()%7 + 1;

        if(dice == guess)
        {
            cout << "\n\n\t\tGood Luck!! You won Rs." << bettingAmount * 10;
            amount = amount + bettingAmount * 10;
        }
        else
        {
            cout << "\t\tBad Luck this time !! You lost $ "<< bettingAmount <<"\n";
            amount = amount - bettingAmount;
        }

        cout << "\n\t\tThe winning number was : " << dice <<"\n";
        cout << "\n\t\t"<<playerName<<" You have $ " << amount << "\n";
        if(amount == 0)
        {
            cout << "\t\tYou have no money to play ";
            break;
        }
        cout << "\n\n\t\t-->Do you want to play again (y/n)? ";
        cin >> choice;
    }while(choice =="Y"|| choice=="y");
    system("cls");
    cout << "\n\n\n\t\t";
    a.drawLine_H(70,'=');
    string choice1;
    cout << "\n\n\t\t\tThanks for playing game. Your balance amount is $ " << amount << "\n\n\t\t";
    a.drawLine_H(70,'=');
    cout<<"\n\t\t\tDo You Want to Return Menu Page?(*)";
    cout<<"\n\t\t\tOr Do You Want To Quit?(#)\n\n";
    loop2:
    cout<<"\t\t\tType Your Answer :";

    cin>>choice1;
    if (choice1=="*")
    {
        system("cls");
        a.game();
    }
    else if (choice1=="#"){
        system("cls");
        a.end_project();
    }
    else {
        goto loop2;
    }
}


void Games::Word_Guessing_Game(){

    print a;
    Games b;
    int bettingAmount;
    string BettingAmount;
    string choice;
    string name;

	char letter;
	int num_of_wrong_guesses=0;
	string word;
	string words[] =
	{
		"argentina",
		"pakistan",
		"maldives",
		"malaysia",
		"srilanka",
		"australia",
		"ecuador",
		"japan",
		"afghanistan",
		"indonesia",
		"germany",
		"netherlands"
	};


	srand(time(NULL));
	int n=rand()% 11;
	int Amount_1;
	word=words[n];


	string unknown(word.length(),'*');

    b.rules();

    cout << "\n\n\t\tYour current balance is $ " << amount << "\n";
    loop3:
    cout <<"\t\tPlease enter money to bet : $";
            cin >> BettingAmount;
            if (check_string(BettingAmount)==true){
                bettingAmount=STOI(BettingAmount);
            }
            else {

                b.Word_Guessing_Game();
            }
            if(bettingAmount > amount){
                cout << "\t\tYour betting amount is more than your current balance\n"
                       <<"\n\t\tRe-enter data\n ";
                       goto loop3;
            }

	while (num_of_wrong_guesses < MAX_TRIES)
	{
	    system("cls");

		cout << "\n\n\t\t\tThe Unknown Word :" << unknown;
		cout << "\n\t\t\tPress * If You Don't Want To Play\n";
		cout << "\t\t\tGuess a letter: ";
		cin >> letter;
		if (letter=='*'){
            system("cls");
            a.game();
		}

        int matches=0;
        int len=word.length();

        for (int i = 0; i< len; i++)
        {
            if (letter == unknown[i])
                {
                    matches=0;
                    break;
                }
            if (letter == word[i])
            {
                unknown[i] = letter;
                matches++;
            }
        }

		if (matches==0)
		{
			cout << endl << "\t\t\tOops! That letter isn't in there!" << endl;
			num_of_wrong_guesses++;
		}
		else
		{
			cout << endl << "\t\t\tYOO!!!You Have Found a Letter!\n\t\t\tThe Unknown Word : "<<unknown << endl;
		}

		cout << "\t\t\tYou have " << MAX_TRIES - num_of_wrong_guesses;
		cout << " Guesses left." << endl;

		getchar();
		cout<<"\t\t\tPress Enter :";
		getchar();

		if (word==unknown)
		{
			cout << "\t\t\t Word : "<<word << endl;
			cout << "\n\n\t\t\tGood Luck!! You won Rs." << bettingAmount * 2<<endl;
            amount = amount + bettingAmount * 2;
            loop5:
            cout <<"\t\t\tDo U Want To Play Again(Y/N)???";
            cin>>choice;

            if (choice=="y"||choice=="Y"){
                b.Word_Guessing_Game();
            }
            else if (choice=="N"||choice=="n"){
                b.Word_Guessing_Game_part();
            }
            else {
                cout<<"\t\t\tWRONG KEYWORD\n";
                goto loop5;
            }
		}
	}
	if(num_of_wrong_guesses == MAX_TRIES)
	{
	    string choice2;
		cout << "\n\t\t\tSorry!!You lose..." << endl;
		cout << "\t\t\tThe word was : " << word <<endl;

		loop6:
		cout<<"\n\t\t\tDo You Want to Play Again(Y/N)?";
		cin>>choice2;

		if (choice=="y"||choice=="Y"){
                b.Word_Guessing_Game();
            }
        else if (choice=="N"||choice=="n"){
                a.game();
            }
        else {
                cout<<"\t\tWRONG KEYWORD\n";
                goto loop6;
            }
	}
	cin.ignore();
	cin.get();
}

void Games::Word_Guessing_Game_part(){

    print a;
    Games b;
    system("cls");
    string choice1;

    cout<<"\t\t\t\t";
    a.drawLine_H (50,'-');
    cout<<"\t\t\t\t";
    a.drawLine_H (50,'=');
    cout<<"\t\t\t\t";
    a.drawLine_H (50,'-');
    cout << "\n\n\t\t\t\t\t\t  CASINO GAME\n\n\n\t\t\t\t";
    a.drawLine_H(50,'-');
    cout<<"\t\t\t\t";
    a.drawLine_H (50,'=');
    cout<<"\t\t\t\t";
    a.drawLine_H (50,'-');
    cout<<"\n\n\t\t\t1.Quit?\n\t\t\t2.Menu Page\n\n?";
    loop4:
    cout<<"\t\tSelect Your Options :";
    cin>>choice1;

    if (choice1=="1"){
        a.end_project();
    }
    else if (choice1=="2"){
        a.game();
    }
    else goto loop4;
}
