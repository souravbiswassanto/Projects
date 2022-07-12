#include"All_Headers.h"
using namespace std;

void print::drawLine_H(int n, char symbol)
{
    for(int i=0;i<n; i++){
        cout << symbol;

    }
    cout << "\n" ;
}

void print::drawLine_h(int n, char symbol)
{
    for(int i=0;i<n; i++)
        cout << symbol;
    cout << "\n" ;
}

void print::drawLine_V(int n,char symbol)
{
    for(int i=0; i<n; i++)
        cout << symbol<<endl;
}

void print::rules()
{
    print a;
    system("cls");
    cout << "\n\n\t\t";
    a.drawLine_H(80,'-');
    cout << "\t\t\t\t\t   RULES OF THE GAME\n\t\t";
    a.drawLine_H(80,'-');
    cout << "\t\t\t1. Choose any number between 1 to 10\n";
    cout << "\t\t\t2. If you win you will get 10 times of money you bet\n";
    cout << "\t\t\t3. If you bet on wrong number you will lose your betting amount\n\n\t\t";
    a.drawLine_H(80,'-');

}

void print::front_page (){

    print a;
    a.totaldrawLine_H(11);
    cout<<"\t\t\t\t";
    a.drawLine_H(45,'=');
    cout<<"\n\t\t\t\t\t";
                              cout<<"  W";
    for (int i=0;i<=10000;i++);cout<<"E";
    for (int i=0;i<=10000;i++);cout<<"L";
    for (int i=0;i<=10000;i++);cout<<"C";
    for (int i=0;i<=10000;i++);cout<<"O";
    for (int i=0;i<=10000;i++);cout<<"M";
    for (int i=0;i<=10000;i++);cout<<"E  ";
    for (int i=0;i<=10000;i++);cout<<"T";
    for (int i=0;i<=10000;i++);cout<<"O  ";
    for (int i=0;i<=10000;i++);cout<<"J";
    for (int i=0;i<=10000;i++);cout<<"A";
    for (int i=0;i<=10000;i++);cout<<"C";
    for (int i=0;i<=10000;i++);cout<<"K";
    for (int i=0;i<=10000;i++);cout<<"P";
    for (int i=0;i<=10000;i++);cout<<"O";
    for (int i=0;i<=10000;i++);cout<<"T";
    for (int i=0;i<=10000;i++);cout<<"!";
    for (int i=0;i<=10000;i++);cout<<"!";
    for (int i=0;i<=10000;i++);cout<<"!";
    for (int i=0;i<=10000;i++);cout<<"!";
    for (int i=0;i<=10000;i++);cout<<"!\n\n\t\t\t\t\t";
    for (int i=0;i<=10000;i++);cout<<"T";
    for (int i=0;i<=10000;i++);cout<<"H";
    for (int i=0;i<=10000;i++);cout<<"E ";
    for (int i=0;i<=10000;i++);cout<<"R";
    for (int i=0;i<=10000;i++);cout<<"O";
    for (int i=0;i<=10000;i++);cout<<"Y";
    for (int i=0;i<=10000;i++);cout<<"A";
    for (int i=0;i<=10000;i++);cout<<"L ";
    for (int i=0;i<=10000;i++);cout<<"C";
    for (int i=0;i<=10000;i++);cout<<"A";
    for (int i=0;i<=10000;i++);cout<<"S";
    for (int i=0;i<=10000;i++);cout<<"I";
    for (int i=0;i<=10000;i++);cout<<"N";
    for (int i=0;i<=10000;i++);cout<<"O ";
    for (int i=0;i<=10000;i++);cout<<"P";
    for (int i=0;i<=10000;i++);cout<<"A";
    for (int i=0;i<=10000;i++);cout<<"L";
    for (int i=0;i<=10000;i++);cout<<"A";
    for (int i=0;i<=10000;i++);cout<<"C";
    for (int i=0;i<=10000;i++);cout<<"E";
    for (int i=0;i<=10000;i++);cout<<"!";
    for (int i=0;i<=10000;i++);cout<<"!";
    for (int i=0;i<=10000;i++);cout<<"!";
    for (int i=0;i<=10000;i++);cout<<"!";
    for (int i=0;i<=10000;i++);cout<<"!\n\n";

    cout<<"\t\t\t\t";
    string options;
    Games obj;
    a.drawLine_H(45,'=');

    cout<<"\n\t\t\t\t";
    cout<<"Do You Want To Enter Now (Y/N)??:";
    cin>>options;
    if (options=="Y"||options=="y"){
        system("cls");
        obj.name_money();
    }
    else if (options=="N"||options=="n"){
        a.end_project();
    }
    else  {
        system("cls");
        //cout<<"\n\n\n\t\t\t\tWRONG KEYWORD\n\n";
        a.front_page();
    }
}

bool print::end_project(){
    print a;
    system("cls");
    cout<<"\n\n\n\n\t\t\t\t";
    a.drawLine_H(50,'_');
    cout<<"\t\t\t\t";
    a.drawLine_H(50,'_');
    cout<<"\n\n\t\t\t\t\tTHANKS FOR VISITING MY CASINO\n\t\t\t\t\tHOPE YOU LIKED OUR ALL GAMES\n\t\t\t\t";
    cout<<"\tHOPE YOU WILL VISIT US AGAIN!!\n\t\t\t\t\tTILL THEN?????!! GOODBYE!!";
    cout<<"\n\n\n\t\t\t\t\t\tSTAY WELL!!";
    cout<<"\n\n\t\t\t\t";
    a.drawLine_H(50,'_');
    cout<<"\t\t\t\t";
    a.drawLine_H(50,'_');

    return 0;
}

void print::totaldrawLine_H(int n){
    print obj;
    for (int i=1;i<=n;i++)obj.drawLine_h(20,' ');

}

void print::game(){
    //system("cls");
    print a;
    Games b;
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

    cout<<"\n\n\t\t\t\t\t1.NUMBER GUESSING GAME\n";
    cout<<"\t\t\t\t\t2.WORD   GUESSING GAME\n";
    cout<<"\t\t\t\t\t3.Previous Page\n";
    cout<<"\t\t\t\t\t4.No I Am Afraid!!I'm Coward!!\n\n";

    cout<<"\t\t\t\t\tEnter Your Choice :";
    cin>>choice1;

    if (choice1=="1"){
        system("cls");
        b.Number_Guessing_Game ();
    }
    else if (choice1=="2"){
        system("cls");
        b.Word_Guessing_Game();
    }
    else if (choice1=="3"){
        system("cls");
        b.name_money_2();
    }
    else if (choice1=="4"){
        a.end_project();
    }
    else {
        system("cls");
        cout<<"\t\t\t\tWRONG KEYWORD"<<endl;
        a.game();
    }
}




