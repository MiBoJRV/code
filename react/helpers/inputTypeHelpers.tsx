import { InputKindsEnum } from 'src/constants';

export const getInputType = (inputKind: string): string => {
  switch (inputKind) {
    case InputKindsEnum.INPUT:
      return 'input';
    case InputKindsEnum.TEXTAREA:
      return 'textarea';
    default:
      return 'input';
  }
};
