#include<stdio.h>
#include<stdlib.h>
#include<locale.h>
#include<windows.h>
int main (){
	int i;
	setlocale(LC_ALL,"portuguese");
	for (i=3; i>=1; i--){
		printf("%i \n",i);
	}
	system ("pause");
}
