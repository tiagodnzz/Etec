#include<stdlib.h>
#include<stdio.h>
#include<windows.h>
#include<locale.h>
int main(){
	int i;
		setlocale(LC_ALL, "portuguese");
			printf("\n Repetição-laço \n");
				for(i=10;i>=1;i--){
			printf("\n %i-lógica é legal \n",i);
				Sleep(500);
									}
					system("pause");
}
