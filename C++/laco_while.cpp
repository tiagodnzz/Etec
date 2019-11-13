#include<stdio.h>
#include<stdlib.h>
#include<locale.h>
#include<windows.h>
int main (){
	int i;
	setlocale(LC_ALL,"portuguese");
	i=3;
	while (i>=1){
		printf("%i \n",i);
		i--;
	}
	system ("pause");
}
