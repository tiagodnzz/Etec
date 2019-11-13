#include<stdlib.h>
#include<stdio.h>
#include<windows.h>
#include<locale.h>
int main(){
	int i,entrada;
		setlocale(LC_ALL, "portuguese");
			printf("\n Informe um número \n");
				scanf("%i",&entrada);
				for(i=entrada;i>=1;i--){				
			printf("\n %i\n",i);
										 		
				Sleep(500);
									}
					system("pause");
			}
