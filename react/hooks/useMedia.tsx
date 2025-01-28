import { useMediaQuery } from 'react-responsive';
import { BREAKPOINTS } from 'src/constants';

export const useMedia = () => {
  const isMediaLg = useMediaQuery({
    query: `(min-width: ${BREAKPOINTS.LG}px)`,
  });
  const isMediaXl = useMediaQuery({
    query: `(min-width: ${BREAKPOINTS.XL}px)`,
  });
  const isMediaSm = useMediaQuery({
    query: `(min-width: ${BREAKPOINTS.SM}px)`,
  });

  return { isMediaLg, isMediaXl, isMediaSm };
};
