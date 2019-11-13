#include<stdio.h>
#include<stdlib.h>
#include<locale.h>
#include<windows.h>
int main (){
	int i, entrada;
	setlocale(LC_ALL,"portuguese");
		printf("\n Informe o número 3 \n");
		scanf("%i",&entrada);
		while (entrada!=3){
			printf("\n Errouuuuuuuu! \n");
			system("color 9");
			Sleep (2000);
			system("cls");
			printf("\n Informe o número 3 \n");
			scanf("%i",&entrada);			
		}
		printf("\n Acertou!!! \n");
		
	system ("pause");
}
