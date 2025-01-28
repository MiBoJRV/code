import { BtnKindsEnum } from 'src/constants';

export const getIconBtnStyle = (buttonKind: string): string => {
  switch (buttonKind) {
    case BtnKindsEnum.SMALL:
      return 'h-[36px] w-[28px] pl-2';
    case BtnKindsEnum.LARGE:
      return 'h-[40px] w-[32px] pl-2.5';
    case BtnKindsEnum.XL:
      return 'h-[60px] w-[44px] pl-5';
    default:
      return 'h-[36px] w-[28px] pl-2';
  }
};

export const getIconBtnCurveStyle = (buttonKind: string): string => {
  switch (buttonKind) {
    case BtnKindsEnum.SMALL:
      return 'h-[36px] w-[8px] right-[-8px]';
    case BtnKindsEnum.LARGE:
      return 'h-[40px] w-[10px] right-[-10px]';
    case BtnKindsEnum.XL:
      return 'h-[60px] w-[20px] -right-5';
    default:
      return 'h-[36px] w-[8px] right-[-8px]';
  }
};
