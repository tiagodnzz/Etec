#include<stdio.h>
#include<stdlib.h>
#include<locale.h>
#include<windows.h>
int main (){
	int i;
	setlocale(LC_ALL,"portuguese");
	i=3;
	do{
		printf("%i \n" ,i);
		i--;
	} while(i>=1);
	system ("pause");
}
