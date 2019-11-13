#include<stdio.h>
#include<stdlib.h>
#include<locale.h>
#include<windows.h>
int main (){
	int i, entrada;
	setlocale(LC_ALL,"portuguese");
		printf("\n Informe o número 3 \n");
		scanf("%i",&entrada);
		if(entrada ==3){
			//printf("\n Acertou!!! \n");
		}
	else{
			do{
				printf("\n Errouuuuuuuu! \n");
			system("pause");
			system("cls");
			printf("\n Informe o número 3 \n");
		scanf("%i",&entrada);
	} while (entrada!=3);
}
	printf("\n Acertou!!! \n");		
	system ("pause");
}
